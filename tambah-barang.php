<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Barang | Stok &amp; Belanja Rumah Tangga</title>
  <link rel="stylesheet" href="./Assets/css/style.css">
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

      <main class="main add-item-main">
        <h1 class="add-item-title">Tambah Barang</h1>
        <p class="add-item-breadcrumb">Beranda &gt; Barang &gt; Tambah Barang (halaman yang sama dipakai untuk Ubah Barang)</p>

        <div class="add-item-layout">
          <section class="add-item-card" aria-label="Form tambah barang">
            <div class="add-item-fields">
              <label class="field category-field">Kategori *
                <select>
                  <option value="">Pilih kategori</option>
                  <option>Bahan Pokok</option>
                  <option>Perlengkapan Mandi</option>
                  <option>Minuman</option>
                  <option>Alat Kebersihan</option>
                  <option>Lainnya</option>
                </select>
              </label>

              <label class="field item-name-field">Nama Barang *
                <input placeholder="Contoh: Beras">
                <span class="field-hint">Nama barang wajib diisi</span>
              </label>

              <label class="field">Satuan *
                <select>
                  <option value="">kg / liter / pcs / botol</option>
                  <option>kg</option>
                  <option>liter</option>
                  <option>pcs</option>
                  <option>botol</option>
                  <option>galon</option>
                  <option>roll</option>
                </select>
              </label>

              <label class="field">Stok Saat Ini *
                <input type="number" min="0" placeholder="0">
              </label>

              <label class="field">Stok Minimum *
                <input type="number" min="0" placeholder="0">
                <span class="field-hint">Stok minimum harus berupa angka ≥ 0</span>
              </label>

              <label class="field">Lokasi Penyimpanan *
                <input placeholder="Contoh: Dapur - Rak 1">
              </label>
            </div>

            <div class="add-item-actions">
              <a class="save-button" href="barang.php">Simpan</a>
              <a class="cancel-button" href="barang.php">Batal</a>
            </div>
          </section>

          <aside class="entry-rules">
            <h2>Ketentuan Pengisian</h2>
            <ul>
              <li>Tanda * wajib diisi.</li>
              <li>Stok minimum menjadi batas barang masuk ke Daftar Belanja.</li>
              <li>Perubahan stok berikutnya dicatat lewat menu Mutasi Stok.</li>
              <li>Setelah Simpan tampil notifikasi berhasil/gagal.</li>
            </ul>
          </aside>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
