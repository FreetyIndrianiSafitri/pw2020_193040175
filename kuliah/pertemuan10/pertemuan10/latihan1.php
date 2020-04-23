<?php
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040175');

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$mahasiswa = $rows;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body bgcolor="salmon">
  <center>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0" bgcolor="lightgrey">
    <tr bgclor="pink">
      <th>No</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
</center>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>


      <tr>
        <td><?= $i++ ?></td>
        <td><img src="img/<?= $mhs["gambar"] ?>" width=60px;></td>
        <td><?= $mhs["nrp"] ?></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["email"] ?></td>
        <td><?= $mhs["jurusan"] ?></td>
        <td>
          <a href=""><button>Ubah</button></a> | <a href=""><button>Hapus</button></a>
        </td>
      </tr>

      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>