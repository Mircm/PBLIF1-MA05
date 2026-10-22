<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Stok &amp; Belanja Kebutuhan Rumah Tangga</title>
  <link rel="stylesheet" href="./Assets/css/style.css?v=2">
</head>
<body>
  <main class="auth-page">
    <section class="auth-card" aria-label="Login dan registrasi Stok dan Belanja">
      <section class="auth-panel" id="loginPanel">
        <div class="brand">
          <span class="brand-image" aria-hidden="true">
            <img src="Assets/icons/stok-belanja.svg" alt="">
          </span>
          <h1>Stok &amp; Belanja<br>Kebutuhan Rumah Tangga</h1>
        </div>
        <div class="divider"></div>
        <h2>Login</h2>
        <p class="subtitle">Masuk untuk mengakses akun Anda</p>

        <div class="auth-form">
          <label for="loginUsername">Username</label>
          <input id="loginUsername" autocomplete="username" placeholder="Masukkan username Anda">
          <div class="label-row">
            <label for="loginPassword">Password</label>
            <span class="password-toggle"></span>
          </div>
          <input id="loginPassword" type="password" autocomplete="current-password" placeholder="Masukkan password Anda">
          <p class="form-message">Pesan error ditampilkan di sini</p>
          <a class="submit-button" href="dashboard.php">Masuk</a>
        </div>

        <div class="divider footer-divider"></div>
        <p class="switch-prompt">Belum punya akun? <a href="#registerPanel">Registrasi</a></p>
      </section>

      <section class="auth-panel register-panel" id="registerPanel">
        <h1 class="register-title">Registrasi</h1>
        <p class="subtitle register-subtitle">Buat akun Pengguna Rumah/Kos</p>
        <div class="divider"></div>

        <div class="auth-form register-form">
          <label for="fullName">Nama Lengkap *</label>
          <input id="fullName" autocomplete="name" placeholder="Masukkan nama lengkap">
          <label for="registerUsername">Username *</label>
          <input id="registerUsername" autocomplete="username" placeholder="Masukkan username">
          <label for="registerPassword">Password *</label>
          <input id="registerPassword" type="password" autocomplete="new-password" placeholder="Minimal 6 karakter">
          <label for="confirmPassword">Konfirmasi Password *</label>
          <input id="confirmPassword" type="password" autocomplete="new-password" placeholder="Ulangi password">
          <p class="form-message">Pesan validasi ditampilkan di sini</p>
          <button class="submit-button" type="button">Daftar</button>
        </div>

        <div class="divider footer-divider"></div>
        <p class="switch-prompt">Sudah punya akun? <a href="#loginPanel">Login</a></p>
      </section>
    </section>
  </main>
</body>
</html>
