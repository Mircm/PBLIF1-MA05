<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan | Stok &amp; Belanja Rumah Tangga</title>
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
          <a class="nav-link" href="daftar-belanja.php"><img class="nav-icon" src="Assets/icons/daftar-belanja.svg" alt="">Daftar Belanja</a>
          <a class="nav-link active" href="laporan.php" aria-current="page"><img class="nav-icon" src="Assets/icons/laporan.svg" alt="">Laporan</a>
          <div class="nav-divider" aria-hidden="true"></div>
          <a class="nav-link logout-link" href="index.php"><img class="nav-icon" src="Assets/icons/logout.svg" alt="">Logout</a>
        </nav>
      </aside>
      <main class="main content-page-main">
        <h1 class="content-page-title">Laporan</h1>
        <p class="content-page-breadcrumb">Beranda &gt; Laporan</p>

        <div class="report-tabs">
          <input type="radio" name="report-tab" id="report-current" checked>
          <input type="radio" name="report-tab" id="report-low">
          <input type="radio" name="report-tab" id="report-mutation">
          <nav class="report-tab-list" aria-label="Jenis laporan">
            <label for="report-current">Stok Saat Ini</label>
            <label for="report-low">Barang di Bawah Minimum</label>
            <label for="report-mutation">Rekap Mutasi</label>
          </nav>

          <section class="report-view report-current-view" aria-label="Laporan stok saat ini">
            <div class="report-filters">
              <label>Kategori<select><option>Semua</option><option>Bahan Pokok</option><option>Perlengkapan Mandi</option><option>Minuman</option><option>Alat Kebersihan</option></select></label>
              <label>Lokasi<select><option>Semua</option><option>Dapur - Rak 1</option><option>Dapur - Rak 2</option><option>Kamar Mandi</option><option>Dapur - Lantai</option><option>Gudang</option></select></label>
              <label>Status Stok<select><option>Semua</option><option>Aman</option><option>Rendah</option><option>Habis</option></select></label>
              <button class="primary-button" type="button">Tampilkan</button>
            </div>
            <div class="data-table-wrap">
              <table class="data-table report-table">
                <thead><tr><th>No</th><th>Nama Barang</th><th>Kategori</th><th>Stok</th><th>Stok Min</th><th>Satuan</th><th>Lokasi</th><th>Status</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Beras</td><td>Bahan Pokok</td><td>15</td><td>5</td><td>kg</td><td>Dapur - Rak 1</td><td>Aman</td></tr>
                  <tr><td>2</td><td>Minyak Goreng</td><td>Bahan Pokok</td><td>2</td><td>3</td><td>liter</td><td>Dapur - Rak 2</td><td>Rendah</td></tr>
                  <tr><td>3</td><td>Sabun Mandi</td><td>Perlengkapan Mandi</td><td>6</td><td>4</td><td>pcs</td><td>Kamar Mandi</td><td>Aman</td></tr>
                  <tr><td>4</td><td>Shampo</td><td>Perlengkapan Mandi</td><td>1</td><td>2</td><td>botol</td><td>Kamar Mandi</td><td>Rendah</td></tr>
                  <tr><td>5</td><td>Air Minum Galon</td><td>Minuman</td><td>0</td><td>1</td><td>galon</td><td>Dapur - Lantai</td><td>Habis</td></tr>
                  <tr><td>6</td><td>Sapu</td><td>Alat Kebersihan</td><td>2</td><td>1</td><td>pcs</td><td>Gudang</td><td>Aman</td></tr>
                </tbody>
                <tfoot><tr><td colspan="8">Total jenis barang: 48</td></tr></tfoot>
              </table>
            </div>
          </section>

          <section class="report-view report-low-view" aria-label="Laporan barang di bawah minimum">
            <div class="report-filters report-low-filters">
              <label>Kategori<select><option>Semua</option><option>Bahan Pokok</option><option>Perlengkapan Mandi</option><option>Minuman</option></select></label>
              <label>Lokasi<select><option>Semua</option><option>Dapur</option><option>Kamar Mandi</option></select></label>
              <button class="primary-button" type="button">Tampilkan</button>
            </div>
            <div class="data-table-wrap">
              <table class="data-table report-table">
                <thead><tr><th>No</th><th>Nama Barang</th><th>Kategori</th><th>Stok</th><th>Stok Min</th><th>Kekurangan</th><th>Satuan</th><th>Lokasi</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Minyak Goreng</td><td>Bahan Pokok</td><td>2</td><td>3</td><td>1</td><td>liter</td><td>Dapur - Rak 2</td></tr>
                  <tr><td>2</td><td>Shampo</td><td>Perlengkapan Mandi</td><td>1</td><td>2</td><td>1</td><td>botol</td><td>Kamar Mandi</td></tr>
                  <tr><td>3</td><td>Air Minum Galon</td><td>Minuman</td><td>0</td><td>1</td><td>1</td><td>galon</td><td>Dapur - Lantai</td></tr>
                  <tr><td>4</td><td>Tisu Toilet</td><td>Perlengkapan Mandi</td><td>4</td><td>6</td><td>2</td><td>roll</td><td>Kamar Mandi</td></tr>
                  <tr><td>5</td><td>Gula Pasir</td><td>Bahan Pokok</td><td>1</td><td>2</td><td>1</td><td>kg</td><td>Dapur - Rak 1</td></tr>
                  <tr><td>6</td><td>Pasta Gigi</td><td>Perlengkapan Mandi</td><td>1</td><td>2</td><td>1</td><td>pcs</td><td>Kamar Mandi</td></tr>
                </tbody>
                <tfoot><tr><td colspan="8">Total barang di bawah stok minimum: 7</td></tr></tfoot>
              </table>
            </div>
          </section>

          <section class="report-view report-mutation-view" aria-label="Rekap mutasi">
            <div class="report-filters report-mutation-filters">
              <label>Dari Tanggal<input type="text" value="01-10-2026"></label>
              <label>Sampai Tanggal<input type="text" value="19-10-2026"></label>
              <label>Kategori<select><option>Semua</option><option>Bahan Pokok</option><option>Perlengkapan Mandi</option><option>Minuman</option></select></label>
              <label>Jenis<select><option>Semua</option><option>Masuk</option><option>Keluar</option></select></label>
              <button class="primary-button" type="button">Tampilkan</button>
            </div>
            <div class="data-table-wrap">
              <table class="data-table report-table">
                <thead><tr><th>No</th><th>Nama Barang</th><th>Kategori</th><th>Total Masuk</th><th>Total Keluar</th><th>Selisih</th><th>Satuan</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Beras</td><td>Bahan Pokok</td><td>20</td><td>10</td><td>+10</td><td>kg</td></tr>
                  <tr><td>2</td><td>Minyak Goreng</td><td>Bahan Pokok</td><td>6</td><td>7</td><td>-1</td><td>liter</td></tr>
                  <tr><td>3</td><td>Sabun Mandi</td><td>Perlengkapan Mandi</td><td>8</td><td>5</td><td>+3</td><td>pcs</td></tr>
                  <tr><td>4</td><td>Air Minum Galon</td><td>Minuman</td><td>10</td><td>11</td><td>-1</td><td>galon</td></tr>
                  <tr><td>5</td><td>Telur</td><td>Bahan Pokok</td><td>60</td><td>45</td><td>+15</td><td>butir</td></tr>
                  <tr><td>6</td><td>Shampo</td><td>Perlengkapan Mandi</td><td>4</td><td>3</td><td>+1</td><td>botol</td></tr>
                </tbody>
                <tfoot><tr><td colspan="7">Total transaksi: 34 | Total Masuk: 108 | Total Keluar: 81</td></tr></tfoot>
              </table>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
