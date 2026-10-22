<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kategori | Stok &amp; Belanja Rumah Tangga</title>
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
          <a class="nav-link active" href="kategori.php" aria-current="page"><img class="nav-icon" src="Assets/icons/kategori.svg" alt="">Kategori</a>
          <a class="nav-link" href="barang.php"><img class="nav-icon" src="Assets/icons/barang.svg" alt="">Barang</a>
          <a class="nav-link" href="mutasi-stok.php"><img class="nav-icon" src="Assets/icons/mutasi-stok.svg" alt="">Mutasi Stok</a>
          <a class="nav-link" href="daftar-belanja.php"><img class="nav-icon" src="Assets/icons/daftar-belanja.svg" alt="">Daftar Belanja</a>
          <a class="nav-link" href="laporan.php"><img class="nav-icon" src="Assets/icons/laporan.svg" alt="">Laporan</a>
          <div class="nav-divider" aria-hidden="true"></div>
          <a class="nav-link logout-link" href="index.php"><img class="nav-icon" src="Assets/icons/logout.svg" alt="">Logout</a>
        </nav>
      </aside>
      <main class="main content-page-main">
        <h1 class="content-page-title">Kategori Barang</h1>
        <p class="content-page-breadcrumb">Beranda &gt; Kategori</p>

        <div class="category-layout">
          <section class="category-list" id="category-list" aria-labelledby="category-list-title">
            <h2 class="visually-hidden" id="category-list-title">Daftar Kategori</h2>
            <div class="category-toolbar">
              <div class="category-search">
                <input type="search" placeholder="Cari nama kategori..." aria-label="Cari nama kategori">
                <button class="secondary-button" type="button">Cari</button>
              </div>
              <a class="category-add-button" href="#form-tambah-kategori">+ Tambah</a>
            </div>
            <div class="data-table-wrap">
              <table class="data-table category-table">
                <thead>
                  <tr><th scope="col">No</th><th scope="col">Nama Kategori</th><th scope="col">Jumlah Barang</th><th scope="col">Aksi</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td class="table-primary">Bahan Pokok</td><td>12</td><td><a class="table-button" href="#form-edit-bahan-pokok">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                  <tr><td>2</td><td class="table-primary">Bumbu Dapur</td><td>9</td><td><a class="table-button" href="#form-edit-bumbu-dapur">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                  <tr><td>3</td><td class="table-primary">Perlengkapan Mandi</td><td>8</td><td><a class="table-button" href="#form-edit-perlengkapan-mandi">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                  <tr><td>4</td><td class="table-primary">Alat Kebersihan</td><td>9</td><td><a class="table-button" href="#form-edit-alat-kebersihan">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                  <tr><td>5</td><td class="table-primary">Minuman</td><td>5</td><td><a class="table-button" href="#form-edit-minuman">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                  <tr><td>6</td><td class="table-primary">Lain-lain</td><td>5</td><td><a class="table-button" href="#form-edit-lain-lain">Edit</a> <button class="table-button" type="button">Hapus</button></td></tr>
                </tbody>
              </table>
            </div>
            <div class="category-list-footer">
              <p class="table-footnote">Menampilkan 1-6 dari 6 kategori</p>
              <nav class="category-pagination" aria-label="Navigasi halaman kategori">
                <button type="button" aria-label="Halaman sebelumnya">‹</button>
                <button class="current-page" type="button" aria-current="page">1</button>
                <button type="button">2</button>
                <button type="button" aria-label="Halaman berikutnya">›</button>
              </nav>
            </div>
          </section>

          <section class="category-form-panel" id="form-tambah-kategori" aria-labelledby="form-tambah-title">
            <h2 id="form-tambah-title">Form Tambah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-name">Nama Kategori *
                <input id="category-name" name="category-name" placeholder="Contoh: Bahan Pokok" required>
                <span class="field-hint">Nama kategori wajib diisi</span>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions">
                <button class="category-save-button" type="button">Simpan</button>
                <a class="secondary-button" href="#category-list">Batal</a>
              </div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-bahan-pokok" aria-labelledby="form-edit-bahan-pokok-title">
            <h2 id="form-edit-bahan-pokok-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-bahan-pokok">Nama Kategori *
                <input id="category-bahan-pokok" name="category-name" value="Bahan Pokok" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-bumbu-dapur" aria-labelledby="form-edit-bumbu-dapur-title">
            <h2 id="form-edit-bumbu-dapur-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-bumbu-dapur">Nama Kategori *
                <input id="category-bumbu-dapur" name="category-name" value="Bumbu Dapur" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-perlengkapan-mandi" aria-labelledby="form-edit-perlengkapan-mandi-title">
            <h2 id="form-edit-perlengkapan-mandi-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-perlengkapan-mandi">Nama Kategori *
                <input id="category-perlengkapan-mandi" name="category-name" value="Perlengkapan Mandi" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-alat-kebersihan" aria-labelledby="form-edit-alat-kebersihan-title">
            <h2 id="form-edit-alat-kebersihan-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-alat-kebersihan">Nama Kategori *
                <input id="category-alat-kebersihan" name="category-name" value="Alat Kebersihan" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-minuman" aria-labelledby="form-edit-minuman-title">
            <h2 id="form-edit-minuman-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-minuman">Nama Kategori *
                <input id="category-minuman" name="category-name" value="Minuman" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>

          <section class="category-form-panel" id="form-edit-lain-lain" aria-labelledby="form-edit-lain-lain-title">
            <h2 id="form-edit-lain-lain-title">Form Ubah Kategori</h2>
            <form class="category-form">
              <label class="content-field" for="category-lain-lain">Nama Kategori *
                <input id="category-lain-lain" name="category-name" value="Lain-lain" required>
              </label>
              <p class="category-notice">Kategori yang masih dipakai barang tidak dapat dihapus.</p>
              <div class="category-form-actions"><button class="category-save-button" type="button">Simpan</button><a class="secondary-button" href="#category-list">Batal</a></div>
            </form>
          </section>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
