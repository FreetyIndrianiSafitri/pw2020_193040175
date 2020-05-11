<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

//cari query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");



// cek apakah tombol ubahh sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah!');
          document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal diubah!";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <title>Ubah Data Mahasiswa</title>
</head>

<body style="background-color: lavender;">
  <h3 style="text-align: center;">Form Ubah Data Mahasiswa</h3>
  <div class="row">
    <form action="" method="POST" class="col s12">
      <input type="hidden" name="id" value="<?= $m['id']; ?>">
      <div class="row">
        <div class="input-field col s4 offset-s4">
          <input class="validate" type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
          <label class="active">Nama</label>
        </div>
        <div class="input-field col s4 offset-s4">
          <input class="validate" type="text" name="nrp" required value="<?= $m['nrp']; ?>">
          <label class="active">NRP</label>
        </div>
        <div class="input-field col s4 offset-s4">
          <input class="validate" type="text" name="email" required value="<?= $m['email']; ?>">
          <label class="active">Email</label>
        </div>
        <div class="input-field col s4 offset-s4">
          <input class="validate" type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
          <label class="active">Jurusan</label>
        </div>
        <div class="input-field col s4 offset-s4">
          <input class="validate" type="text" name="gambar" required value="<?= $m['gambar']; ?>">
          <label class="active">Gambar</label>
        </div>
        <button class="waves-effect waves-light btn col s2 offset-s5" type="submit" name="ubah">Ubah Data</button>
      </div>
  </div>


  </form>

  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>