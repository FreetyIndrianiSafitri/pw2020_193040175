<?php

require 'functions.php';

$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <center>
    <title>Detail Mahasiswa</title>
</head>

<body bgcolor="lightgrey">
  <h1>Detail Mahasiswa</h1>
  <ul>
    <li><img src="img/<?= $mahasiswa["gambar"]; ?>"></li>
    <li>Nrp : <?= $mahasiswa["nrp"]; ?> </li>
    <li>Nama : <?= $mahasiswa["nama"]; ?></li>
    <li>Email : <?= $mahasiswa["email"]; ?></li>
    <li>Jurusan : <?= $mahasiswa["jurusan"]; ?></li>
    <li><a href="ubah.php?id=<?= $mahasiswa['id']; ?>"><button>Ubah</button></a> | <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm('apakah anda yakin?');"><button>Hapus</button></a></li>
    <li><a href="index.php">Kembali Ke Daftar Mahasiswa</a></li>
  </ul>
  </center>

</body>

</html>