<?php

//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location:../index.php");
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

<body class="grey lighten-2" bgcolor="lightgrey">
  <div class="container">
    <div class="gambar">
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
            <p>harga</p>
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
        <div class="gambar">
          <center><img width="200" src="../assets/logo/<?= $apparel["logo_merk"]; ?>" alt=""></center>
        </div>

      </table>
    </div>

    <center>
      <a class="waves-effect waves-light btn" href="../index.php"><button>Kembali</button></a>
    </center>
  </div>
</body>

</html>