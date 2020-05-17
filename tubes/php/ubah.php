<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];


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
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6 offset-s3">
            <input type="hidden" name="id" Id="id" value="<?= $apparel['id']; ?>">
          </div>
        </div>
        <li>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <input type="hidden" name="gambar_lama" value="<?= $apparel['foto'] ?>">
              <label for="foto">Foto</label>
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="foto" class="foto" onchange="previewImage()">
                </div>
                <div class="file-path-wrapper">
                  <img src="../assets/img/<?= $apparel['foto'] ?>" width="120" style="display: block;" class="img-preview">
                </div>
              </div>



    </div>
  </div>
  </li>
  <li>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <label for="nama_barang">Nama Barang :</label><br>
        <input type="text" name="nama_barang" Id="nama_barang" required value="<?= $apparel['nama_barang']; ?>">
      </div>
    </div>
  </li>

  <div class="row">
    <div class="input-field col s6 offset-s3">
      <label for="stok_tersedia">Stok tersedia :</label><br>
      <input type="text" name="stok_tersedia" Id="stok_tersedia" required value="<?= $apparel['stok_tersedia']; ?>">
    </div>
  </div>

  <li>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <label for="warna">Warna :</label><br>
        <input type="text" name="warna" Id="warna" required value="<?= $apparel['warna']; ?>">
      </div>
    </div>
  </li>
  <li>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" Id="harga" required value="<?= $apparel['harga']; ?>">
      </div>
    </div>
  </li>
  <li>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <label for="merk">Merk :</label><br>
        <input type="text" name="merk" Id="merk" required value="<?= $apparel['merk']; ?>">
      </div>
    </div>
  </li>
  <li>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <label for="logo_merk">Logo_Merk :</label><br>
        <input type="text" name="logo_merk" Id="logo_merk" required value="<?= $apparel['logo_merk']; ?>">
      </div>
    </div>
  </li>
  <br>
  <button class="waves-effect green darken-3 btn" type="submit" name="ubah">Ubah Data</button>
  <a class="waves-effect blue darken-4 btn" href="admin.php">Kembali</a>
  </form>
  </div>
  </div>


  <!-- <script type="text/javascript" src="../js/materialize.min.js"></script> -->
  <script src="../js/preview.js"></script>

  <script>
    function previewImage() {
      const foto = document.querySelector('.foto');
      const imgPreview = document.querySelector('.img-preview');

      const oFReader = new FileReader();
      oFReader.readAsDataURL(foto.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    }
  </script>

</body>

</html>