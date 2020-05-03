<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      background-color:lightpink;
    }

    .container h3 {
      margin-top: 75px;
    }

    h3,
    h5 {
      font-weight: 600;
    }

    hr {
      margin-left: -1px;
    }

    .card-link.card-link {
      margin-left: 1px;
    }
  </style>


  <title>Detail Mahasiswa</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logo-unpas.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Universitas Pasundan</strong>
      </a>
      <a class="nav text-white" href="logout.php">Logout</a>
    </div>
  </nav>

  <div class="container ">
    <h3>Detail Mahasiswa</h3>
    <hr style="max-width: 540px;">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/<?= $mhs['gambar']; ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $mhs['nama']; ?></h5>
            <p class="card-text"><?= $mhs['nrp']; ?></p>
            <p class="card-text"><?= $mhs['email']; ?></p>
            <p class="card-text"><?= $mhs['jurusan']; ?></p>
            <a href="ubah.php?id=<?= $mhs['id']; ?>" class="card-link btn-primary btn btn-primary btn-sm">Ubah</a>
            <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="card-link btn btn-danger btn-sm">Hapus</a>
            <a href="index.php" class="card-link btn btn-secondary btn-sm">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>