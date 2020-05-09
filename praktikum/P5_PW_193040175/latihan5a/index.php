<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

//memilih database
mysqli_select_db($conn, "tubes_193040175") or die("Database salah!");

//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tugas 2</title>
</head>

<body>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <div class="container">
    <center>
      <h2>Koleksi Pakaian</h2>
    </center>
    <table border="1" cellspacing="0" cellpadding="5" bgcolor="lightgrey">
      <tr bgcolor="pink">
        <td>
          <center>No.</center>
        </td>
        <td>
          <center>Foto</center>
        </td>
        <td>
          <center>Nama Barang</center>
        </td>
        <td>
          <center>Stok tersedia</center>
        </td>
        <td>
          <center>Warna</center>
        </td>
        <td>
          <center>Harga</center>
        </td>
        <td>
          <center>Merk</center>
        </td>
        <td>
          <center>Logo Merk</center>
        </td>

      </tr>
      <?php $i = 1; ?>
      <?php while ($app = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img width=" 200px" src="assets/img/<?= $app["foto"] ?>">
          </td>
          <td><?= $app["nama_barang"] ?></td>
          <td><?= $app["stok_tersedia"] ?></td>
          <td><?= $app["warna"] ?></td>
          <td><?= $app["harga"] ?></td>
          <td><?= $app["merk"] ?></td>
          <td><img width="200px" src="assets/logo/<?= $app["logo_merk"] ?>"></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>

    </table>
</body>

</html>