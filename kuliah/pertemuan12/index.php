<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
    }

    .container h2 {
      font-weight: 700;
      margin-top: 75px;
    }
  </style>
</head>

<!-- Nabvar -->
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="No">
      <strong>Universitas Pasundan</strong>
    </a>
    <a class="nav text-white" href="logout.php">Logout</a>
  </div>
</nav>

<div class="container">
  <h2 class="py-3 text-uppercase text-center">Daftar Mahasiswa</h2>
  <hr>
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <a href="tambah.php" class="btn btn-success">+ Tambah Data!</a>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="input-group mb-3">
        <form action="" method="POST" class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
          <div class="input-group-append">
            <button class="btn btn-info" type="submit" name="cari">Search!</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <table class="table table-hover table-bordered">
    <thead class="text-uppercase text-center thead-dark">
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php if (empty($mahasiswa)) : ?>
        <tr class="text-center">
          <td colspan="4">
            <h1>404 Not Found!</h1>
            <hr style="max-width: 400px;">
            <p>Data mahasiswa tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
          <td><?= $mhs['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $mhs['id']; ?>" class="btn btn-info btn-sm">Lihat Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>

</html>


</table>



</body>

</html>