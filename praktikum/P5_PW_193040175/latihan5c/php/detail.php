<?php

if (!isset($_GET['Id'])) {
  header("location: ../indexx.php");
  exit;
}
require 'functions.php';

$Id = $_GET['Id'];

$apparel = query("SELECT * FROM apparel WHERE Id = $Id")[0];
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <center>
    <h2>APPAREL COLECTION</h2>
  </center>
  <center>
    <div class="container">
        <div class="Foto">
          <img src="../assets/img/<?= $apparel["Foto"]; ?>" alt="">
        </div>
          <div class="keterangan">
            <p><?= $apparel["Nama Barang"]; ?></p>
            <p><?= $apparel["Kantor Pusat"]; ?></p>
            <p><?= $apparel["Warna"]; ?></p>
            <p><?= $apparel["Harga"]; ?></p>
            <p><?= $apparel["Merk"]; ?></p>
          </div>
      <div class="Logo Merk">
        <img src="../assets/logo/<?= $apparel["Logo Merk"]; ?>" alt="">
      </div>
      <button class="tombol-kembali"><a href="../indexx.php">Kembali</button>
</center>
</body>

</html>