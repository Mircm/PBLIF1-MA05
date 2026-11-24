<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi | Stok & Belanja Kebutuhan Rumah Tangga</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <main class="auth-page register-page">
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
                <h2>Registrasi</h2>
                <p class="subtitle">Buat akun Pengguna Rumah/Kos</p>

                <form class="auth-form" action="regist.php" method="post">
                    <label for="nama-lengkap">Nama Lengkap *</label>
                    <input
                        id="nama-lengkap"
                        name="nama_lengkap"
                        type="text"
                        autocomplete="name"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                    <label for="username">Username *</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        autocomplete="username"
                        placeholder="Masukkan username"
                        required
                    >

                    <label for="email">Email *</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        placeholder="Masukkan email"
                        required
                    >

                    <div class="password-label">
                        <label for="password">Password *</label>
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
                        autocomplete="new-password"
                        placeholder="Minimal 6 karakter"
                        minlength="6"
                        required
                    >

                    <div class="password-label">
                        <label for="konfirmasi-password">Konfirmasi Password *</label>
                        <button
                            class="password-toggle"
                            type="button"
                            aria-controls="konfirmasi-password"
                            aria-label="Tampilkan password"
                        >Lihat</button>
                    </div>
                    <input
                        id="konfirmasi-password"
                        name="konfirmasi_password"
                        type="password"
                        autocomplete="new-password"
                        placeholder="Ulangi password"
                        minlength="6"
                        required
                    >

                    <p class="form-message">Konfirmasi password tidak sama</p>

                    <button class="submit-button" type="submit">Daftar</button>
                </form>

                <hr>
                <p class="switch-prompt">Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
        </section>
    </main>
    <script>
        document.querySelectorAll(".password-toggle").forEach(function (toggle) {
            const passwordInput = document.getElementById(toggle.getAttribute("aria-controls"));

            toggle.addEventListener("click", function () {
                const isPasswordHidden = passwordInput.type === "password";
                passwordInput.type = isPasswordHidden ? "text" : "password";
                toggle.textContent = isPasswordHidden ? "Sembunyikan" : "Lihat";
                toggle.setAttribute(
                    "aria-label",
                    isPasswordHidden ? "Sembunyikan password" : "Tampilkan password"
                );
            });
        });
    </script>
</body>
</html>