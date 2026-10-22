<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mutasi Stok | Stok &amp; Belanja Rumah Tangga</title>
  <link rel="stylesheet" href="./Assets/css/style.css?v=2">
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
          <a class="nav-link active" href="mutasi-stok.php" aria-current="page"><img class="nav-icon" src="Assets/icons/mutasi-stok.svg" alt="">Mutasi Stok</a>
          <a class="nav-link" href="daftar-belanja.php"><img class="nav-icon" src="Assets/icons/daftar-belanja.svg" alt="">Daftar Belanja</a>
          <a class="nav-link" href="laporan.php"><img class="nav-icon" src="Assets/icons/laporan.svg" alt="">Laporan</a>
          <div class="nav-divider" aria-hidden="true"></div>
          <a class="nav-link logout-link" href="index.php"><img class="nav-icon" src="Assets/icons/logout.svg" alt="">Logout</a>
        </nav>
      </aside>
      <main class="main content-page-main">
        <h1 class="content-page-title">Mutasi Stok</h1>
        <p class="content-page-breadcrumb">Beranda &gt; Mutasi Stok</p>

        <section class="mutation-entry-panel" aria-labelledby="mutation-form-title">
          <h2 id="mutation-form-title">Catat Mutasi Stok</h2>
          <form class="mutation-form">
            <label class="content-field">Barang *
              <select required>
                <option value="">Pilih barang</option>
                <option>Beras</option><option>Sabun Mandi</option><option>Air Minum Galon</option>
                <option>Minyak Goreng</option><option>Telur</option><option>Shampo</option>
                <option>Gula Pasir</option><option>Sabun Cuci Piring</option><option>Sapu</option><option>Tisu Toilet</option>
              </select>
            </label>
            <fieldset class="content-field mutation-type-field">
              <legend>Jenis *</legend>
              <div class="mutation-type-options">
                <label><input type="radio" name="mutation-type" value="masuk" required> Masuk</label>
                <label><input type="radio" name="mutation-type" value="keluar"> Keluar</label>
              </div>
            </fieldset>
            <label class="content-field">Jumlah *
              <input type="number" min="1" value="0" required>
            </label>
            <label class="content-field">Tanggal *
              <input type="date" value="2026-10-19" required>
            </label>
            <label class="content-field mutation-description">Keterangan
              <input placeholder="Contoh: Beli di pasar">
            </label>
            <div class="mutation-actions">
              <button class="mutation-save-button" type="button">Simpan</button>
              <button class="secondary-button" type="reset">Reset</button>
            </div>
            <p class="mutation-hint">Setelah disimpan, stok barang diperbarui otomatis (Masuk = tambah, Keluar = kurang).</p>
          </form>
        </section>

        <section class="mutation-history" aria-labelledby="mutation-history-title">
          <h2 id="mutation-history-title">Riwayat Mutasi</h2>
          <div class="mutation-filters">
            <input type="search" placeholder="Cari nama barang..." aria-label="Cari nama barang">
            <select aria-label="Filter jenis mutasi"><option>Semua Jenis</option><option>Masuk</option><option>Keluar</option></select>
            <input type="date" aria-label="Tanggal mulai" value="2026-10-01">
            <input type="date" aria-label="Tanggal akhir" value="2026-10-19">
            <button class="secondary-button" type="button">Filter</button>
          </div>
          <div class="data-table-wrap">
            <table class="data-table mutation-table">
              <thead>
                <tr><th scope="col">No</th><th scope="col">Tanggal</th><th scope="col">Barang</th><th scope="col">Jenis</th><th scope="col">Jumlah</th><th scope="col">Keterangan</th><th scope="col">Aksi</th></tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>19-10-2026</td><td>Beras</td><td>Masuk</td><td>10</td><td class="mutation-note">Beli di pasar</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>2</td><td>19-10-2026</td><td>Sabun Mandi</td><td>Keluar</td><td>2</td><td class="mutation-note">Dipakai</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>3</td><td>18-10-2026</td><td>Air Minum Galon</td><td>Keluar</td><td>1</td><td class="mutation-note">Habis dipakai</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>4</td><td>17-10-2026</td><td>Minyak Goreng</td><td>Keluar</td><td>1</td><td class="mutation-note">Memasak</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>5</td><td>16-10-2026</td><td>Telur</td><td>Masuk</td><td>30</td><td class="mutation-note">Beli</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>6</td><td>15-10-2026</td><td>Shampo</td><td>Keluar</td><td>1</td><td class="mutation-note">Dipakai</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
                <tr><td>7</td><td>14-10-2026</td><td>Gula Pasir</td><td>Masuk</td><td>5</td><td class="mutation-note">Belanja bulanan</td><td><button class="table-button" type="button">Edit</button> <button class="table-button" type="button">Hapus</button></td></tr>
              </tbody>
            </table>
          </div>
          <div class="mutation-list-footer">
            <p class="table-footnote">Menampilkan 1-7 dari 34 mutasi</p>
            <nav class="category-pagination" aria-label="Navigasi halaman mutasi">
              <button type="button" aria-label="Halaman sebelumnya">‹</button>
              <button class="current-page" type="button" aria-current="page">1</button>
              <button type="button">2</button>
              <button type="button" aria-label="Halaman berikutnya">›</button>
            </nav>
          </div>
        </section>
      </main>
    </div>
  </div>
</body>
</html>
