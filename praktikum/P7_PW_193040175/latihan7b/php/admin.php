<?php
//menghubungkan dengan file php lainnya

session_start();

require 'functions.php';

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

//pengkondisian untuk mengubah query pengisi variabel
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $apparel = query("SELECT * FROM apparel WHERE
          nama_barang LIKE '%$keyword%' OR
          stok_tersedia LIKE '%$keyword%' OR
          warna LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' OR
          merk LIKE '%$keyword%' ");
} else {

  //melakukan query
  $apparel = query("SELECT * FROM apparel");
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

<body style="background-color: salmon;">
  <nav>
    <div class="nav-wrapper grey darken-1">
      <a href="#" class="brand-logo"><button>ADMIN</button></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="tambah.php" class="waves-effect green darken-3 btn">Tambah Data</a></li>
        <li><a href="logout.php" class="waves-effect red darken-1 btn btn">LOGOUT</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <form action="" method="GET">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" id="keyword" name="keyword" class="validate" autofocus>
          <label for="keyword" class="active"></label>
          <button class="waves-effect blue darken-4 btn" type="text" name="cari">Cari!</button>
        </div>
      </div>
    </form>

    <table border="1" cellpadding="13" cellspacing="0" bgcolor="lightgrey">
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
      <?php if (empty($apparel)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak Ditemukan</h1>
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
              <a class="waves-effect brown darken-1 btn" href="logout.php?id=<?= $app['id']; ?>"><button>Logout</button></a>
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
    </table>
  </div>

  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>