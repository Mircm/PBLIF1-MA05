<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Barang | Stok &amp; Belanja Rumah Tangga</title>
  <link rel="stylesheet" href="Assets/css/base.css">
  <link rel="stylesheet" href="Assets/css/style.css">
  <link rel="stylesheet" href="Assets/css/barang.css">
</head>
<body>
  <div class="app-shell">
    <header class="topbar">
      <a class="brand" href="dashboard.php" aria-label="Stok dan Belanja Rumah Tangga">
        <span class="brand-mark" aria-hidden="true"><img src="Assets/icons/stok-belanja.svg" alt=""></span>
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
          <a class="nav-link" href="dashboard.php">
            <img class="nav-icon" src="Assets/icons/dashboard.svg" alt="">
            Dashboard
          </a>
          <a class="nav-link" href="kategori.php">
            <img class="nav-icon" src="Assets/icons/kategori.svg" alt="">
            Kategori
          </a>
          <a class="nav-link active" href="barang.php" aria-current="page">
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

      <main class="main inventory-main">
        <h1 class="inventory-title">Data Barang</h1>
        <p class="inventory-breadcrumb">Beranda &gt; Barang</p>

        <div class="inventory-toolbar">
          <input type="search" placeholder="Cari nama barang..." aria-label="Cari nama barang">
          <select aria-label="Filter kategori">
            <option>Semua Kategori</option>
            <option>Bahan Pokok</option>
            <option>Perlengkapan Mandi</option>
            <option>Minuman</option>
            <option>Alat Kebersihan</option>
          </select>
          <select aria-label="Filter lokasi">
            <option>Semua Lokasi</option>
            <option>Dapur</option>
            <option>Kamar Mandi</option>
            <option>Gudang</option>
          </select>
          <select aria-label="Filter status">
            <option>Semua Status</option>
            <option>Aman</option>
            <option>Rendah</option>
            <option>Habis</option>
          </select>
          <button class="filter-button" type="button">Filter</button>
          <a class="add-item-button" href="tambah-barang.php">+ Tambah Barang</a>
        </div>

        <div class="inventory-table-wrap">
          <table class="inventory-table">
            <thead>
              <tr>
                <th>No</th><th>Nama Barang</th><th>Kategori</th><th>Satuan</th><th>Stok</th>
                <th>Stok Min</th><th>Lokasi</th><th>Status</th><th>Perlu Dibeli</th><th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td class="item-name">Beras</td><td>Bahan Pokok</td><td>kg</td><td>15</td><td>5</td><td>Dapur - Rak 1</td><td><span class="item-status status-aman">● Aman</span></td><td>□</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>2</td><td class="item-name">Minyak Goreng</td><td>Bahan Pokok</td><td>liter</td><td>2</td><td>3</td><td>Dapur - Rak 2</td><td><span class="item-status status-rendah">▲ Rendah</span></td><td>☑</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>3</td><td class="item-name">Sabun Mandi</td><td>Perlengkapan Mandi</td><td>pcs</td><td>6</td><td>4</td><td>Kamar Mandi</td><td><span class="item-status status-aman">● Aman</span></td><td>□</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>4</td><td class="item-name">Shampo</td><td>Perlengkapan Mandi</td><td>botol</td><td>1</td><td>2</td><td>Kamar Mandi</td><td><span class="item-status status-rendah">▲ Rendah</span></td><td>☑</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>5</td><td class="item-name">Air Minum Galon</td><td>Minuman</td><td>galon</td><td>0</td><td>1</td><td>Dapur - Lantai</td><td><span class="item-status status-habis">× Habis</span></td><td>☑</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>6</td><td class="item-name">Sabun Cuci Piring</td><td>Alat Kebersihan</td><td>botol</td><td>3</td><td>2</td><td>Dapur - Rak 3</td><td><span class="item-status status-aman">● Aman</span></td><td>□</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>7</td><td class="item-name">Sapu</td><td>Alat Kebersihan</td><td>pcs</td><td>2</td><td>1</td><td>Gudang</td><td><span class="item-status status-aman">● Aman</span></td><td>□</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
              <tr><td>8</td><td class="item-name">Tisu Toilet</td><td>Perlengkapan Mandi</td><td>roll</td><td>4</td><td>6</td><td>Kamar Mandi</td><td><span class="item-status status-rendah">▲ Rendah</span></td><td>☑</td><td><button type="button">Edit</button> <button type="button">Hapus</button></td></tr>
            </tbody>
          </table>
        </div>
        <p class="inventory-legend">Indikator: ● Aman (stok &gt; minimum) ▲ Rendah (stok ≤ minimum) × Habis (stok = 0)</p>
        <p class="inventory-count">Menampilkan 1-8 dari 8 barang</p>
        <nav class="pagination" aria-label="Navigasi halaman">
          <button type="button">‹</button><button class="current-page" type="button">1</button><button type="button">2</button><button type="button">›</button>
        </nav>
      </main>
    </div>
  </div>
</body>
</html>
