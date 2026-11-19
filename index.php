<?php
require_once "koneksi.php";

$hasil = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC");
$total_buku = $hasil ? mysqli_num_rows($hasil) : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Sistem Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Navigasi -->
        <aside class="sidebar">
            <div class="sidebar-brand">
                <div class="brand-icon">
                    <svg class="nav-icon" style="stroke: #ffffff;" viewBox="0 0 24 24">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                        <path d="M6 6h10"/>
                        <path d="M6 10h10"/>
                    </svg>
                </div>
                <div>
                    <span class="brand-title">Pustaka<span class="brand-accent">App</span></span>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-label">Navigasi Utama</div>
                <a href="dashboard.php" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <rect width="7" height="9" x="3" y="3" rx="1"/>
                        <rect width="7" height="5" x="14" y="3" rx="1"/>
                        <rect width="7" height="9" x="14" y="12" rx="1"/>
                        <rect width="7" height="5" x="3" y="16" rx="1"/>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="index.php" class="nav-link active">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                        <path d="M4 6h16"/>
                    </svg>
                    <span>Data Buku</span>
                    <span class="nav-badge"><?= $total_buku ?></span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                    </svg>
                    <span>Data Anggota</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                        <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                        <path d="M12 3v18"/>
                    </svg>
                    <span>Peminjaman</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <polyline points="9 14 4 9 9 4"/>
                        <path d="M20 20v-7a4 4 0 0 0-4-4H4"/>
                    </svg>
                    <span>Pengembalian</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    <span>Laporan</span>
                </a>

                <div class="nav-label" style="margin-top: 12px;">Sistem</div>
                <a href="#" class="nav-link">
                    <svg class="nav-icon" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                    <span>Pengaturan</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <div class="user-avatar">AD</div>
                <div class="user-info">
                    <div class="user-name">Petugas Perpustakaan</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <main class="main-wrapper">
            <header class="topbar">
                <div class="topbar-left">
                    <div class="topbar-title">
                        <h1>Data Buku</h1>
                        <p>Kelola koleksi buku dan ketersediaan stok pustaka</p>
                    </div>
                </div>
                <div class="topbar-right">
                    <a href="dashboard.php" class="btn btn-outline btn-sm">&larr; Kembali ke Dashboard</a>
                    <a href="tambah.php" class="btn btn-primary btn-sm">+ Tambah Buku</a>
                </div>
            </header>

            <div class="content-body">
                <?php if (isset($_GET["pesan"])) { ?>
                    <div class="pesan"><?= htmlspecialchars($_GET["pesan"]) ?></div>
                <?php } ?>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="card-title">Daftar Buku Perpustakaan</h2>
                            <p class="card-subtitle">Total terdaftar: <?= $total_buku ?> judul buku</p>
                        </div>
                        <a href="tambah.php" class="btn btn-primary btn-sm">+ Tambah Buku Baru</a>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 50px;">No</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Tahun Terbit</th>
                                    <th>Stok</th>
                                    <th style="text-align: right;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if ($hasil && mysqli_num_rows($hasil) > 0) { ?>
                                    <?php while ($baris = mysqli_fetch_assoc($hasil)) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><strong><?= htmlspecialchars($baris["judul"]) ?></strong></td>
                                        <td><?= htmlspecialchars($baris["penulis"]) ?></td>
                                        <td><?= $baris["tahun_terbit"] ?></td>
                                        <td>
                                            <?php if ($baris["stok"] > 0): ?>
                                                <span class="badge badge-success"><?= $baris["stok"] ?> Tersedia</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Habis</span>
                                            <?php endif; ?>
                                        </td>
                                        <td style="text-align: right;">
                                            <a href="ubah.php?id=<?= $baris["id_buku"] ?>" class="btn btn-outline btn-sm">Ubah</a>
                                            <a href="hapus.php?id=<?= $baris["id_buku"] ?>"
                                               class="btn btn-sm"
                                               style="background-color: var(--danger-bg); color: var(--danger); border-color: #fecaca;"
                                               onclick="return confirm('Yakin hapus buku ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6" style="text-align: center; padding: 30px; color: var(--text-muted);">
                                            Belum ada koleksi buku. Silakan klik tombol <strong>+ Tambah Buku</strong>.
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
