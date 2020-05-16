<?php

require 'functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
    <li>Nrp : <?= $mhs["nrp"]; ?> </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li><a href=""><button>Ubah</button></a> | <a href=""><button>Hapus</button></a></li>
    <li><a href="latihan3.php">Kembali Ke Daftar Mahasiswa</a></li>
  </ul>

</body>

</html>