<?php
require "koneksi.php";

$id = (int) $_GET["id"];
$stmt = mysqli_prepare($koneksi, "DELETE FROM buku WHERE id_buku = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
header("Location: index.php?pesan=Data berhasil dihapus");
exit;