
<?php
$namaPengguna = "demo123!";

$ringkasan = [
    'jumlah_barang'     => 0,
    'barang_stok_rendah'=> 0,
    'mutasi_hari_ini'   => 0,
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard  Stok & Belanja Rumah Tangga</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/svg+xml" href="../icons/stok-belanja.svg">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">
            <div class="brand-logo">
                <img src="../icons/stok-belanja.svg" alt="Logo Stok & Belanja">
            </div>
            <div class="brand-title">Stok &amp; Belanja<br>Rumah Tangga</div>
        </div>

        <ul class="nav-menu">
            <li class="nav-item"><a href="dashboard.php" class="nav-link active"><img src="../icons/dashboard.svg" alt=""><span>Dashboard</span></a></li>
            <li class="nav-item"><a href="kategori.php" class="nav-link"><img src="../icons/kategori.svg" alt=""><span>Kategori</span></a></li>
            <li class="nav-item"><a href="barang.php" class="nav-link"><img src="../icons/barang.svg" alt=""><span>Barang</span></a></li>
            <li class="nav-item"><a href="mutasi.php" class="nav-link"><img src="../icons/mutasi-stok.svg" alt=""><span>Mutasi Stok</span></a></li>
            <li class="nav-item"><a href="belanja.php" class="nav-link"><img src="../icons/daftar-belanja.svg" alt=""><span>Daftar Belanja</span></a></li>
            <li class="nav-item"><a href="laporan.php" class="nav-link"><img src="../icons/laporan.svg" alt=""><span>Laporan</span></a></li>
        </ul>

        <div class="nav-logout">
            <a href="login.php" class="nav-link"><img src="../icons/logout.svg" alt=""><span>Logout</span></a>
        </div>
    </aside>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Topbar -->
        <header class="topbar">
            <form class="search-box" method="GET" action="dashboard.php">
                <input
                    type="text"
                    name="q"
                    value=""
                    placeholder="Cari barang, kategori, atau lokasi..."
                >
            </form>

            <div class="user-profile">
                
                <span><?= htmlspecialchars($namaPengguna) ?> &#9662;</span>
            </div>
        </header>

        <!-- Content -->
        <main class="content">
            <div class="page-header">
                <h1>Dashboard</h1>
                <div class="breadcrumb">Beranda &gt; <span>Dashboard</span></div>
            </div>

            <!-- 3 Stat Cards -->
            <section class="stats-grid">
                <div class="stat-card blue">
                    <div class="stat-label">Jumlah Barang</div>
                    <div class="stat-value"><?= (int)$ringkasan['jumlah_barang'] ?></div>
                </div>

                <div class="stat-card amber">
                    <div class="stat-label">Barang Stok Rendah</div>
                    <div class="stat-value"><?= (int)$ringkasan['barang_stok_rendah'] ?></div>
                </div>

                <div class="stat-card emerald">
                    <div class="stat-label">Mutasi Hari Ini</div>
                    <div class="stat-value"><?= (int)$ringkasan['mutasi_hari_ini'] ?></div>
                </div>
            </section>

            <!-- Action Buttons -->
            <section class="action-bar">
                <a href="#tambah-barang" class="btn btn-primary">+ Tambah Barang</a>
                <a href="#catat-mutasi" class="btn btn-primary">+ Catat Mutasi</a>
                <a href="#daftar-belanja" class="btn btn-outline">Lihat Daftar Belanja</a>
            </section>
        </main>
    </div>
</body>
</html>
