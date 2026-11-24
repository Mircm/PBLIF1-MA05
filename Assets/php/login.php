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

                    <p class="form-message">Username atau password salah</p>

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