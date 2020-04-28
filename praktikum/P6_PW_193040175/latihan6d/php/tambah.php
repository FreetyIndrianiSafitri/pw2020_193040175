<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert ('Data Gagal Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body bgcolor="lightcyan">
  <h3>Form Tambah Data Apparel</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="foto">Foto</label><br>
        <input type="text" name="foto" Id="foto" required><br><br>
      </li>
      <li>
        <label for="nama_barang">Nama Barang :</label><br>
        <input type="text" name="nama_barang" Id="nama_barang" required><br><br>
      </li>
      <li>
        <label for="stok_tersedia">Stok tersedia :</label><br>
        <input type="text" name="stok_tersedia" Id="stok_tersedia" required><br><br>
      </li>
      <li>
        <label for="warna">Warna :</label><br>
        <input type="text" name="warna" Id="warna" required><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" Id="harga" required><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label><br>
        <input type="text" name="merk" Id="merk" required><br><br>
      </li>
      <li>
        <label for="logo_merk">Logo Merk :</label><br>
        <input type="text" name="logo_merk" Id="logo_merk" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
      <button type="submit">
        <a href="admin.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>