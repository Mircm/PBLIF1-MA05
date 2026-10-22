<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Stok &amp; Belanja Rumah Tangga</title>
  <link rel="stylesheet" href="Assets/css/base.css">
  <link rel="stylesheet" href="Assets/css/style.css">
  <link rel="stylesheet" href="Assets/css/dashboard.css">
</head>
<body>
  <div class="app-shell">
    <header class="topbar">
      <a class="brand" href="dashboard.php" aria-label="Stok dan Belanja Rumah Tangga">
        <span class="brand-mark" aria-hidden="true">
          <img src="Assets/icons/stok-belanja.svg" alt="">
        </span>
        <span>Stok &amp; Belanja<br>Rumah Tangga</span>
      </a>
      <div class="search-form">
        <input type="search" placeholder="Cari barang, kategori, atau lokasi..." aria-label="Cari barang, kategori, atau lokasi">
      </div>
      <div class="user-menu">
        <span class="avatar" aria-hidden="true">●</span>
        <span>Nama Pengguna</span>
        <span aria-hidden="true">⌄</span>
      </div>
    </header>

    <div class="layout">
      <aside class="sidebar">
        <nav aria-label="Navigasi utama">
          <a class="nav-link active" href="dashboard.php" aria-current="page">
            <img class="nav-icon" src="Assets/icons/dashboard.svg" alt="">
            Dashboard
          </a>
          <a class="nav-link" href="kategori.php">
            <img class="nav-icon" src="Assets/icons/kategori.svg" alt="">
            Kategori
          </a>
          <a class="nav-link" href="barang.php">
            <img class="nav-icon" src="Assets/icons/barang.svg" alt="">
            Barang
          </a>
          <a class="nav-link" href="mutasi-stok.php">
            <img class="nav-icon" src="Assets/icons/mutasi-stok.svg" alt="">
            Mutasi Stok
          </a>
          <a class="nav-link" href="daftar-belanja.php">
            <img class="nav-icon" src="Assets/icons/daftar-belanja.svg" alt="">
            Daftar Belanja
          </a>
          <a class="nav-link" href="laporan.php">
            <img class="nav-icon" src="Assets/icons/laporan.svg" alt="">
            Laporan
          </a>
          <div class="nav-divider" aria-hidden="true"></div>
          <a class="nav-link logout-link" href="index.php">
            <img class="nav-icon" src="Assets/icons/logout.svg" alt="">
            Logout
          </a>
        </nav>
      </aside>

      <main class="main dashboard-main" id="dashboard">
        <h1 class="dashboard-title">Dashboard</h1>
        <p class="dashboard-breadcrumb">Beranda &gt; Dashboard</p>

        <section class="dashboard-summary" aria-label="Ringkasan stok">
          <article class="summary-card">
            <span class="summary-icon" aria-hidden="true"><img src="Assets/icons/barang.svg" alt=""></span>
            <div><h2>Jumlah Barang</h2><p class="summary-number">8</p></div>
          </article>
          <article class="summary-card">
            <span class="summary-icon" aria-hidden="true"><img src="Assets/icons/kategori.svg" alt=""></span>
            <div><h2>Barang Stok Rendah</h2><p class="summary-number">4</p></div>
          </article>
          <article class="summary-card">
            <span class="summary-icon" aria-hidden="true"><img src="Assets/icons/mutasi-stok.svg" alt=""></span>
            <div><h2>Mutasi Hari Ini</h2><p class="summary-number">5</p></div>
          </article>
        </section>

        <nav class="dashboard-actions" aria-label="Aksi cepat">
          <a class="dashboard-action dashboard-action-primary" href="tambah-barang.php">+ Tambah Barang</a>
          <a class="dashboard-action" href="mutasi-stok.php">+ Catat Mutasi</a>
          <a class="dashboard-action" href="daftar-belanja.php">Lihat Daftar Belanja</a>
        </nav>

        <div class="dashboard-tables">
          <section class="dashboard-section" id="barang">
            <div class="dashboard-section-heading">
              <h2>Barang Stok Rendah</h2>
              <a href="barang.php">Lihat semua</a>
            </div>
            <div class="dashboard-table-wrap">
              <table class="dashboard-table">
                <thead><tr><th scope="col">Barang</th><th scope="col">Stok</th><th scope="col">Min</th><th scope="col">Status</th></tr></thead>
                <tbody>
                  <tr><td>Minyak Goreng</td><td>2 liter</td><td>3</td><td><span class="stock-status stock-status-low">▲ Rendah</span></td></tr>
                  <tr><td>Shampo</td><td>1 botol</td><td>2</td><td><span class="stock-status stock-status-low">▲ Rendah</span></td></tr>
                  <tr><td>Air Minum Galon</td><td>0 galon</td><td>1</td><td><span class="stock-status stock-status-out">× Habis</span></td></tr>
                  <tr><td>Tisu Toilet</td><td>4 roll</td><td>6</td><td><span class="stock-status stock-status-low">▲ Rendah</span></td></tr>
                </tbody>
              </table>
            </div>
          </section>

          <section class="dashboard-section" id="mutasi">
            <div class="dashboard-section-heading">
              <h2>Mutasi Hari Ini</h2>
              <a href="mutasi-stok.php">Lihat semua</a>
            </div>
            <div class="dashboard-table-wrap">
              <table class="dashboard-table">
                <thead><tr><th scope="col">Barang</th><th scope="col">Jenis</th><th scope="col">Jumlah</th><th scope="col">Keterangan</th></tr></thead>
                <tbody>
                  <tr><td>Beras</td><td>Masuk</td><td>10 kg</td><td>Beli di pasar</td></tr>
                  <tr><td>Sabun Mandi</td><td>Keluar</td><td>2 pcs</td><td>Dipakai</td></tr>
                  <tr><td>Air Minum Galon</td><td>Keluar</td><td>1 galon</td><td>Habis dipakai</td></tr>
                  <tr><td>Gula Pasir</td><td>Keluar</td><td>1 kg</td><td>Dipakai</td></tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
