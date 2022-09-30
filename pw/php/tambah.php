<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0 ) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="post">
    <ul>
        <li>
            <label for="nama_buku">Nama Buku :</label><br>
            <input type="text" name="nama_buku" id="nama_buku" required><br><br>
        </li>
        <li>
            <label for="penulis">Penulis :</label><br>
            <input type="text" name="penulis" id="penulis" required><br><br>
        </li>
        <li>
            <label for="tahun_terbit">Tahun Terbit :</label><br>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required><br><br>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <li>
            <label for="StokItem">StokItem :</label><br>
            <input type="text" name="stokitem" id="stokitem" required><br><br>
        </li>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
    </ul>
</body>
</html>