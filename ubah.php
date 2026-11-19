<?php
require_once "koneksi.php";

$id = (int) $_GET["id"];

if (isset($_POST["simpan"])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun = (int) $_POST["tahun_terbit"];
    $stok = (int) $_POST["stok"];

    $sql = "UPDATE buku SET judul = ?, penulis = ?, tahun_terbit = ?, stok = ? WHERE id_buku = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ssiii", $judul, $penulis, $tahun, $stok, $id);
    mysqli_stmt_execute($stmt);
    header("Location: index.php?pesan=Data buku berhasil diperbarui");
    exit;
}

$hasil = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $id");
$buku = mysqli_fetch_assoc($hasil);

if (!$buku) {
    die("Buku tidak ditemukan. <a href='index.php'>Kembali</a>");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku - Sistem Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content-body" style="max-width: 600px; padding-top: 40px;">
        <div style="margin-bottom: 20px;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none; font-size: 0.85rem; font-weight: 600;">&larr; Kembali ke Daftar Buku</a>
            <h1 style="font-size: 1.4rem; font-weight: 700; margin-top: 8px;">Ubah Data Buku</h1>
            <p style="font-size: 0.82rem; color: var(--text-muted);">Perbarui informasi buku ID #<?= $buku['id_buku'] ?></p>
        </div>

        <form method="post" style="max-width: 100%;">
            <label for="judul">Judul Buku *</label>
            <input type="text" id="judul" name="judul" required value="<?= htmlspecialchars($buku["judul"]) ?>">

            <label for="penulis">Penulis / Pengarang *</label>
            <input type="text" id="penulis" name="penulis" required value="<?= htmlspecialchars($buku["penulis"]) ?>">

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                <div>
                    <label for="tahun_terbit">Tahun Terbit *</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" required value="<?= $buku["tahun_terbit"] ?>">
                </div>
                <div>
                    <label for="stok">Jumlah Stok *</label>
                    <input type="number" id="stok" name="stok" required min="0" value="<?= $buku["stok"] ?>">
                </div>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
                <a href="index.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
