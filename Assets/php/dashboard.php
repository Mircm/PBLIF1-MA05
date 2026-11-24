
<?php
$namaPengguna = "Nama Pengguna";

$ringkasan = [
    'jumlah_barang'     => 48,
    'barang_stok_rendah'=> 7,
    'mutasi_hari_ini'   => 5,
];

$stokRendah = [
    ['barang' => 'Minyak Goreng', 'stok' => '2 liter', 'min' => 3, 'status' => 'Rendah'],
    ['barang' => 'Shampo',        'stok' => '1 botol', 'min' => 2, 'status' => 'Rendah'],

];

$mutasiHariIni = [
    ['barang' => 'Beras',          'jenis' => 'Masuk',  'jumlah' => '10 kg',   'keterangan' => 'Beli di pasar'],
    ['barang' => 'Sabun Mandi',    'jenis' => 'Keluar', 'jumlah' => '2 pcs',   'keterangan' => 'Dipakai'],

];

$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';
if ($keyword !== '') {
    $qLower = mb_strtolower($keyword);
    $stokRendah = array_filter($stokRendah, function ($row) use ($qLower) {
        return mb_strpos(mb_strtolower($row['barang']), $qLower) !== false
            || mb_strpos(mb_strtolower($row['status']), $qLower) !== false;
    });
    $mutasiHariIni = array_filter($mutasiHariIni, function ($row) use ($qLower) {
        return mb_strpos(mb_strtolower($row['barang']), $qLower) !== false
            || mb_strpos(mb_strtolower($row['keterangan']), $qLower) !== false;
    });
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard  Stok & Belanja Rumah Tangga</title>
    <link rel="stylesheet"  href="../css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand">
            <div class="brand-logo" <img src="../icons/stok-belanja.svg" alt=""></div>
            <div class="brand-title">Stok &amp; Belanja<br>Rumah Tangga</div>
        </div>

        <ul class="nav-menu">
            <li class="nav-item"><a href="dashboard.php" class="nav-link active">Dashboard</a></li>
            <li class="nav-item"><a href="kategori.php" class="nav-link">Kategori</a></li>
            <li class="nav-item"><a href="barang.php" class="nav-link">Barang</a></li>
            <li class="nav-item"><a href="mutasi.php" class="nav-link">Mutasi Stok</a></li>
            <li class="nav-item"><a href="belanja.php" class="nav-link">Daftar Belanja</a></li>
            <li class="nav-item"><a href="laporan.php" class="nav-link">Laporan</a></li>
        </ul>

        <div class="nav-logout">
            <a href="login.php" class="nav-link">Logout</a>
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
                    value="<?= htmlspecialchars($keyword) ?>"
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

            <!-- Two Data Tables -->
            <section class="tables-grid">
                <!-- Tabel Barang Stok Rendah -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Barang Stok Rendah</h2>
                        <a href="#stok-rendah" class="card-link">Lihat semua</a>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Barang</th>
                                    <th>Stok</th>
                                    <th>Min</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($stokRendah)): ?>
                                    <tr>
                                        <td colspan="4" style="text-align:center; color:#64748b;">Tidak ada data yang cocok.</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($stokRendah as $item): ?>
                                        <?php
                                        $isEmpty = strtolower($item['status']) === 'habis';
                                        $badgeClass = $isEmpty ? 'badge-empty' : 'badge-low';
                                        $icon = $isEmpty ? '&#10005;' : '&#9650;';
                                        ?>
                                        <tr>
                                            <td><strong><?= htmlspecialchars($item['barang']) ?></strong></td>
                                            <td><?= htmlspecialchars($item['stok']) ?></td>
                                            <td><?= htmlspecialchars((string)$item['min']) ?></td>
                                            <td>
                                                <span class="badge <?= $badgeClass ?>">
                                                    <?= $icon ?> <?= htmlspecialchars($item['status']) ?>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tabel Mutasi Hari Ini -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Mutasi Hari Ini</h2>
                        <a href="#mutasi-hari-ini" class="card-link">Lihat semua</a>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Barang</th>
                                    <th>Jenis</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($mutasiHariIni)): ?>
                                    <tr>
                                        <td colspan="4" style="text-align:center; color:#64748b;">Tidak ada mutasi yang cocok.</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($mutasiHariIni as $mutasi): ?>
                                        <?php
                                        $isMasuk = strtolower($mutasi['jenis']) === 'masuk';
                                        $jenisClass = $isMasuk ? 'badge-in' : 'badge-out';
                                        ?>
                                        <tr>
                                            <td><strong><?= htmlspecialchars($mutasi['barang']) ?></strong></td>
                                            <td>
                                                <span class="badge <?= $jenisClass ?>">
                                                    <?= htmlspecialchars($mutasi['jenis']) ?>
                                                </span>
                                            </td>
                                            <td><?= htmlspecialchars($mutasi['jumlah']) ?></td>
                                            <td><?= htmlspecialchars($mutasi['keterangan']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
