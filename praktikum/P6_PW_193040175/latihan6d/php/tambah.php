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
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <title>Document</title>
</head>

<body bgcolor="lightcyan">
  <div class="container grey lighten-3">
    <center>
      <h3>Form Tambah Data Apparel</h3>
    </center>
    <div class="row">
      <form action="" method="POST">
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <input type="hidden" name="id" Id="id" value="<?= $apparel['id']; ?>">
          </div>
        </div>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="foto">Foto :</label><br>
              <input type="text" name="foto" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="nama_barang">Nama Barang :</label><br>
              <input type="text" name="nama_barang" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="stok_tersedia">Stok tersedia :</label><br>
              <input type="text" name="stok_tersedia" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="warna">Warna :</label><br>
              <input type="text" name="warna" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="harga">Harga :</label><br>
              <input type="text" name="harga" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="merk">Merk :</label><br>
              <input type="text" name="merk" required>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="logo_merk">Logo Merk :</label><br>
              <input type="text" name="logo_merk" required>
            </div>
          </div>
        </li>
        <br>
        <center><button class="waves-effect green darken-3 btn" type="submit" name="tambah">Tambah Data</button></center>
        <center><a class="waves-effect blue darken-4 btn" href="admin.php">Kembali</a></center>
      </form>
    </div>
  </div>

  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>