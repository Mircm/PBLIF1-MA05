<?php
session_start();

$demoUser = [
    'name' => 'Pengguna Demo',
    'username' => 'demo',
    'email' => 'demo@contoh.com',
    'password' => password_hash('Demo123!', PASSWORD_DEFAULT),
];
$registeredUsers = $_SESSION['registered_users'] ?? [];
$message = $_SESSION['flash_message'] ?? '';
$messageType = $_SESSION['flash_type'] ?? 'success';
unset($_SESSION['flash_message'], $_SESSION['flash_type']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginName = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $messageType = 'error';

    if ($loginName === '' || $password === '') {
        $message = 'Username/email dan password wajib diisi.';
    } else {
        $users = array_merge([$demoUser], $registeredUsers);
        $matchedUser = null;

        foreach ($users as $user) {
            if (
                strcasecmp($loginName, $user['username']) === 0
                || strcasecmp($loginName, $user['email']) === 0
            ) {
                $matchedUser = $user;
                break;
            }
        }

        if ($matchedUser && password_verify($password, $matchedUser['password'])) {
            $_SESSION['current_user'] = $matchedUser['username'];
            $message = 'Login berhasil. Selamat datang, ' . $matchedUser['name'] . '!';
            $messageType = 'success';
        } else {
            $message = 'Username/email atau password salah. Periksa kembali data akun Anda.';
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Stok & Belanja Kebutuhan Rumah Tangga</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <main class="auth-page login-page">
        <section class="auth-card">
            <header class="brand-header">
                <span class="brand-icon">
                    <img src="../icons/stok-belanja.svg" alt="">
                </span>
                <div class="brand-text">
                    <h1>Stok & Belanja</h1>
                    <p>Kebutuhan Rumah Tangga</p>
                </div>
            </header>

            <div class="auth-content">
                <h2>Login</h2>
                <p class="subtitle">Masuk untuk mengakses akun Anda</p>

                <p class="demo-account">
                    Akun demo untuk mencoba:<br>
                    Username: <strong>demo</strong> atau email: <strong>demo@contoh.com</strong><br>
                    Password: <strong>Demo123!</strong>
                </p>

                <form class="auth-form" action="login.php" method="post">
                    <label for="username">Username / Email</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        autocomplete="username"
                        placeholder="Masukkan username atau email Anda"
                        required
                    >

                    <div class="password-label">
                        <label for="password">Password</label>
                        <button
                            class="password-toggle"
                            type="button"
                            aria-controls="password"
                            aria-label="Tampilkan password"
                        >Lihat</button>
                    </div>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        autocomplete="current-password"
                        placeholder="Masukkan password Anda"
                        required
                    >

                    <?php if ($message !== ''): ?>
                        <p class="form-message <?= htmlspecialchars($messageType, ENT_QUOTES, 'UTF-8') ?>" role="alert">
                            <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    <?php endif; ?>

                    <button class="submit-button" type="submit">Masuk</button>
                </form>

                <hr>
                <p class="switch-prompt">Belum punya akun? <a href="regist.php">Registrasi</a></p>
            </div>
        </section>
    </main>
    <script>
        const passwordInput = document.getElementById("password");
        const passwordToggle = document.querySelector(".password-toggle");

        passwordToggle.addEventListener("click", function () {
            const isPasswordHidden = passwordInput.type === "password";
            passwordInput.type = isPasswordHidden ? "text" : "password";
            passwordToggle.textContent = isPasswordHidden ? "Sembunyikan" : "Lihat";
            passwordToggle.setAttribute(
                "aria-label",
                isPasswordHidden ? "Sembunyikan password" : "Tampilkan password"
            );
        });
    </script>
</body>
</html>