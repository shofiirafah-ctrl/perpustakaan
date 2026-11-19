<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_perpustakaan";

try {
    $koneksi = mysqli_connect($host, $user, $pass, $db);
} catch (mysqli_sql_exception $e) {
    die("Koneksi gagal: " . $e->getMessage());
}