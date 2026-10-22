<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Belanja | Stok &amp; Belanja Rumah Tangga</title>
  <link rel="stylesheet" href="./Assets/css/style.css">
</head>
<body>
  <div class="app-shell">
    <header class="topbar">
      <a class="brand" href="dashboard.php" aria-label="Stok dan Belanja Rumah Tangga">
        <span class="brand-mark" aria-hidden="true"><img src="Assets/icons/stok-belanja.svg" alt=""></span>
        <span>Stok &amp; Belanja<br>Rumah Tangga</span>
      </a>
      <div class="search-form"><input type="search" placeholder="Cari barang, kategori, atau lokasi..." aria-label="Cari barang, kategori, atau lokasi"></div>
      <div class="user-menu"><span class="avatar" aria-hidden="true">●</span><span>Nama Pengguna</span><span aria-hidden="true">⌄</span></div>
    </header>
    <div class="layout">
      <aside class="sidebar">
        <nav aria-label="Navigasi utama">
          <a class="nav-link" href="dashboard.php"><img class="nav-icon" src="Assets/icons/dashboard.svg" alt="">Dashboard</a>
          <a class="nav-link" href="kategori.php"><img class="nav-icon" src="Assets/icons/kategori.svg" alt="">Kategori</a>
          <a class="nav-link" href="barang.php"><img class="nav-icon" src="Assets/icons/barang.svg" alt="">Barang</a>
          <a class="nav-link" href="mutasi-stok.php"><img class="nav-icon" src="Assets/icons/mutasi-stok.svg" alt="">Mutasi Stok</a>
          <a class="nav-link active" href="daftar-belanja.php" aria-current="page"><img class="nav-icon" src="Assets/icons/daftar-belanja.svg" alt="">Daftar Belanja</a>
          <a class="nav-link" href="laporan.php"><img class="nav-icon" src="Assets/icons/laporan.svg" alt="">Laporan</a>
          <div class="nav-divider" aria-hidden="true"></div>
          <a class="nav-link logout-link" href="index.php"><img class="nav-icon" src="Assets/icons/logout.svg" alt="">Logout</a>
        </nav>
      </aside>
      <main class="main content-page-main">
        <h1 class="content-page-title">Daftar Belanja</h1>
        <p class="content-page-breadcrumb">Beranda &gt; Daftar Belanja</p>

        <p class="shopping-notice">Daftar dibuat otomatis dari barang dengan stok &le; stok minimum.</p>
        <div class="shopping-toolbar">
          <input id="shopping-search" type="search" placeholder="Cari nama barang..." aria-label="Cari nama barang">
          <select id="shopping-category" aria-label="Filter kategori">
            <option value="">Semua Kategori</option>
            <option>Bahan Pokok</option>
            <option>Perlengkapan Mandi</option>
            <option>Minuman</option>
            <option>Alat Kebersihan</option>
          </select>
          <div class="shopping-toolbar-actions">
            <button class="secondary-button" id="mark-shopping-items" type="button">Tandai Perlu Dibeli</button>
            <a class="primary-button" href="daftar-belanja-cetak.php">Cetak Daftar</a>
          </div>
        </div>
        <div class="data-table-wrap">
          <table class="data-table shopping-table shopping-list-table">
            <thead>
              <tr><th scope="col">Pilih</th><th scope="col">Nama Barang</th><th scope="col">Kategori</th><th scope="col">Stok</th><th scope="col">Stok Min</th><th scope="col">Satuan</th><th scope="col">Saran Beli</th><th scope="col">Lokasi</th><th scope="col">Status</th></tr>
            </thead>
            <tbody id="shopping-list-rows">
              <tr data-category="Bahan Pokok"><td><input type="checkbox" aria-label="Pilih Minyak Goreng" checked></td><td>Minyak Goreng</td><td>Bahan Pokok</td><td>2</td><td>3</td><td>liter</td><td>4</td><td>Dapur - Rak 2</td><td>Perlu dibeli</td></tr>
              <tr data-category="Perlengkapan Mandi"><td><input type="checkbox" aria-label="Pilih Shampo" checked></td><td>Shampo</td><td>Perlengkapan Mandi</td><td>1</td><td>2</td><td>botol</td><td>3</td><td>Kamar Mandi</td><td>Perlu dibeli</td></tr>
              <tr data-category="Minuman"><td><input type="checkbox" aria-label="Pilih Air Minum Galon" checked></td><td>Air Minum Galon</td><td>Minuman</td><td>0</td><td>1</td><td>galon</td><td>2</td><td>Dapur - Lantai</td><td>Perlu dibeli</td></tr>
              <tr data-category="Perlengkapan Mandi"><td><input type="checkbox" aria-label="Pilih Tisu Toilet" checked></td><td>Tisu Toilet</td><td>Perlengkapan Mandi</td><td>4</td><td>6</td><td>roll</td><td>8</td><td>Kamar Mandi</td><td>Perlu dibeli</td></tr>
              <tr data-category="Bahan Pokok"><td><input type="checkbox" aria-label="Pilih Gula Pasir"></td><td>Gula Pasir</td><td>Bahan Pokok</td><td>1</td><td>2</td><td>kg</td><td>3</td><td>Dapur - Rak 1</td><td>Belum ditandai</td></tr>
              <tr data-category="Alat Kebersihan"><td><input type="checkbox" aria-label="Pilih Sabun Cuci Piring"></td><td>Sabun Cuci Piring</td><td>Alat Kebersihan</td><td>2</td><td>2</td><td>botol</td><td>2</td><td>Dapur - Rak 3</td><td>Belum ditandai</td></tr>
              <tr data-category="Perlengkapan Mandi"><td><input type="checkbox" aria-label="Pilih Pasta Gigi"></td><td>Pasta Gigi</td><td>Perlengkapan Mandi</td><td>1</td><td>2</td><td>pcs</td><td>3</td><td>Kamar Mandi</td><td>Belum ditandai</td></tr>
            </tbody>
            <tfoot><tr><td colspan="9">Total barang perlu dibeli: 7 item</td></tr></tfoot>
          </table>
        </div>
        <div class="shopping-list-footer">
          <p class="table-footnote" id="shopping-list-count">Menampilkan 1-7 dari 7 barang</p>
          <nav class="shopping-pagination" aria-label="Navigasi halaman daftar belanja">
            <button type="button" aria-label="Halaman sebelumnya">‹</button>
            <button class="current-page" type="button" aria-current="page">1</button>
            <button type="button">2</button>
            <button type="button" aria-label="Halaman berikutnya">›</button>
          </nav>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
