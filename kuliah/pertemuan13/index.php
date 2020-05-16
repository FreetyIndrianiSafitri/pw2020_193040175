<?php

session_start();



if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>DAFTAR MAHASISWA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="background-color: lightgrey;">
  <a href="logout.php" class="row col pink darken btn">LOGOUT</a>
  <h3 style="text-align: center;">Daftar mahasiswa</h3>

  <a href="tambah.php" class="row col pink darken btn">Tambah Data Mahasiswa</a>

  <br><br>

  <form action="" method="POST">
    <div class="row">
      <div class="input-field col s4 ">
        <input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="row col pink darken btn tombol-cari">SEARCH!</button>
      </div>
    </div>
  </form>
  <br>

  <div class="conainer">
    <table border="1" cellpadding="10" cellspacing="0" class="striped">
      <tr>
        <td>#</td>
        <td>Gambar</td>
        <td>Nama</td>
        <td>Aksi</td>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style: italic;">!!!Data Mahasiswa Tidak Ditemukan!!!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
          <td><?= $m['nama']; ?></td>
          <td>
            <a class="row col pink darken btn" href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>
  </div>


  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>