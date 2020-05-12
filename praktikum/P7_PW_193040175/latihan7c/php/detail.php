<?php

//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="background-color: lightgray;">
  <div class="container">
    <div class="Foto">
      <center><img width="200" src="../assets/img/<?= $apparel["foto"]; ?>" alt=""></center>
    </div>
    <div class="keterangan">
      <table>

        <tr>
          <td>
            <p>Nama Barang</p>
          </td>
          <td>
            <p>:</p>
          </td>
          <td>
            <p><?= $apparel["nama_barang"]; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <p>Stok Tersedia</p>
          </td>
          <td>
            <p>:</p>
          </td>
          <td>
            <p><?= $apparel["stok_tersedia"]; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <p>Warna</p>
          </td>
          <td>
            <p>:</p>
          </td>
          <td>
            <p><?= $apparel["warna"]; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <p>Harga</p>
          </td>
          <td>
            <p>:</p>
          </td>
          <td>
            <p><?= $apparel["harga"]; ?></p>
          </td>
        </tr>
        <tr>
          <td>
            <p>Merk</p>
          </td>
          <td>
            <p>:</p>
          </td>
          <td>
            <p><?= $apparel["merk"]; ?></p>
          </td>
        </tr>
        <div class="logo_merk">
          <center><img width="200" src="../assets/logo/<?= $apparel["logo_merk"]; ?>" alt=""></center>
        </div>


      </table>
    </div>

    <center><button class="tombol-kembali"><a class="waves-effect blue darken-4 btn" href="../indexx.php">Kembali</a></button></center>
  </div>
</body>

</html>