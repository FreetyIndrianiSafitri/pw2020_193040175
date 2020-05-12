<?php
require 'functions.php';

$id = $_GET['id'];
$apparel = query("SELECT * FROM apparel WHERE id = '$id'")[0];


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert ('Data Gagal Diubah!');
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

<body style="background-color: lightcyan;">
  <div class="container grey lighten-3">
      <h3 style="text-align: center;">Form Ubah Data Apparel</h3>
    <div class="row">
      <form action="" method="POST">
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <input type="hidden" name="id"  value="<?= $apparel['id']; ?>">
          </div>
        </div>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="foto">Foto :</label><br>
              <input type="text" name="foto" id="foto" required value="<?= $apparel['foto']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="nama_barang">Nama Barang :</label><br>
              <input type="text" name="nama_barang" id="nama_barang" required value="<?= $apparel['nama_barang']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="stok_tersedia">Stok tersedia :</label><br>
              <input type="text" name="stok_tersedia" id="stok_tersedia" required value="<?= $apparel['stok_tersedia']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="warna">Warna :</label><br>
              <input type="text" name="warna" id="warna" required value="<?= $apparel['warna']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="harga">Harga :</label><br>
              <input type="text" name="harga" id="harga" required value="<?= $apparel['harga']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="merk">Merk :</label><br>
              <input type="text" name="merk" id="merk" required value="<?= $apparel['merk']; ?>">
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="logo_merk">Logo_Merk :</label><br>
              <input type="text" name="logo_merk" id="logo_merk" required value="<?= $apparel['logo_merk']; ?>">
            </div>
          </div>
        </li>
        <br>
        <center><button class="waves-effect green darken-3 btn" type="submit" name="ubah">Ubah Data</button></center>
        <center><a class="waves-effect blue darken-4 btn" href="admin.php">Kembali</a></center>
      </form>
    </div>
  </div>


  <script type="text/javascript" src="../js/materialize.min.js"></script>

</body>

</html>