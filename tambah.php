<?php
require_once "koneksi.php";

if (isset($_POST["simpan"])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun = (int) $_POST["tahun_terbit"];
    $stok = (int) $_POST["stok"];

    $sql = "INSERT INTO buku (judul, penulis, tahun_terbit, stok) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $judul, $penulis, $tahun, $stok);
    mysqli_stmt_execute($stmt);
    header("Location: index.php?pesan=Data buku berhasil ditambahkan");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Sistem Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content-body" style="max-width: 600px; padding-top: 40px;">
        <div style="margin-bottom: 20px;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none; font-size: 0.85rem; font-weight: 600;">&larr; Kembali ke Daftar Buku</a>
            <h1 style="font-size: 1.4rem; font-weight: 700; margin-top: 8px;">Tambah Koleksi Buku Baru</h1>
            <p style="font-size: 0.82rem; color: var(--text-muted);">Masukkan detail informasi buku ke database perpustakaan</p>
        </div>

        <form method="post" style="max-width: 100%;">
            <label for="judul">Judul Buku *</label>
            <input type="text" id="judul" name="judul" placeholder="Contoh: Laskar Pelangi" required>

            <label for="penulis">Penulis / Pengarang *</label>
            <input type="text" id="penulis" name="penulis" placeholder="Contoh: Andrea Hirata" required>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                <div>
                    <label for="tahun_terbit">Tahun Terbit *</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" placeholder="2024" required min="1800" max="<?= date('Y') ?>">
                </div>
                <div>
                    <label for="stok">Jumlah Stok *</label>
                    <input type="number" id="stok" name="stok" placeholder="10" required min="0">
                </div>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan Buku</button>
                <a href="index.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
