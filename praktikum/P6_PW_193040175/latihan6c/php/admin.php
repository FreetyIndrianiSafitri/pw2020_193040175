<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$apparel = query("SELECT * FROM apparel");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body bgcolor="salmon">
  <div>
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <table border="1" cellpadding="13" cellspacing="0" bgcolor="lightgrey">
    <tr bgcolor="pink">
      <th>#</th>
      <th>opsi</th>
      <th>Foto</th>
      <th>Nama Barang</th>
      <th>Stok Tersedia</th>
      <th>Warna</th>
      <th>Harga</th>
      <th>Merk</th>
      <th>Logo Merk</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($apparel as $app) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $app['id']; ?>"><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $app['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $app["foto"]; ?>" width="200px"></td>
        <td><?= $app["nama_barang"]; ?></td>
        <td><?= $app["stok_tersedia"]; ?></td>
        <td><?= $app["warna"]; ?></td>
        <td><?= $app["harga"]; ?></td>
        <td><?= $app["merk"]; ?></td>
        <td><img src="../assets/logo/<?= $app["logo_merk"]; ?>" width="200px"></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>