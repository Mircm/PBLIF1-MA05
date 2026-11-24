<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Stok &amp; Belanja Kebutuhan Rumah Tangga</title>
</head>
<body>
    <main>
        <section>
            <header>
                <img src="../icons/stok-belanja.svg" alt="" width="100" height="80">
                <h1>Stok &amp; Belanja<br>Kebutuhan Rumah Tangga</h1>
            </header>

            <hr>

            <h2>Login</h2>
            <p>Masuk untuk mengakses akun Anda</p>

            <form action="login.php" method="post">
                <label for="username">Username</label>
                <input
                    id="username"
                    name="username"
                    type="text"
                    autocomplete="username"
                    placeholder="Masukkan username Anda"
                    required
                >

                <label for="password">Password</label>
                <a href="#password">Lihat</a>
                <input
                    id="password"
                    name="password"
                    type="password"
                    autocomplete="current-password"
                    placeholder="Masukkan password Anda"
                    required
                >

                <p>Pesan error (mis. Username atau password salah)</p>

                <button type="submit">Masuk</button>
            </form>

            <hr>
            <p>Belum punya akun? <a href="register.php">Registrasi</a></p>
        </section>
    </main>
</body>
</html>