<?php
require '../php/functions.php';

$apparel = cari($_GET['keyword']);

// before
// $query = "SELECT * FROM apparel
// WHERE nama LIKE '%$keyword%' OR
// nrp LIKE '%$keyword%'";

// after
// $query = "SELECT * FROM apparel WHERE
//     nama_barang LIKE '%$keyword%' OR
//     stok_tersedia LIKE '%$keyword%' OR
//     warna LIKE '%$keyword%' OR
//     harga LIKE '%$keyword%' OR
//     merk LIKE '%$keyword%' OR
//     logo_merk LIKE '%$keyword%'";

// $apparel = query($query);

?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

<table border="1" cellpadding="13" cellspacing="0" style="background-color: lightgray;">
  <thead>
    <tr style="background-color: pink;">
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
  </thead>
  <tbody>
    <?php if (empty($apparel)) : ?>
      <tr>
        <td colspan="9">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($apparel as $app) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a class="waves-effect brown darken-1 btn" href="ubah.php?id=<?= $app['id']; ?>"><button>Ubah</button></a>
            <a class="waves-effect red darken-1 btn" href="hapus.php?id=<?= $app['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
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
    <?php endif; ?>
  </tbody>
</table>


<script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="../js/script.js"></script>