<?php
$conn = mysqli_connect("localhost","root","") or die("koneksi ke db gagal");
mysqli_select_db($conn, "tubes_193040175") or die("database salah");
$result = mysqli_query($conn, "SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<div class="container">
                <center><h2>APPAREL</h2></center>
 <table cellpadding = "10" cellspacing = "0" border="1" bgcolor="lightgrey" >

        <tr bgcolor="pink">
                <th>No</th>
                <th>Foto </th>
                <th>Nama Barang</th>
                <th>Kantor Utama</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Merk</th>
                <th>Logo Merk</th>
        </tr>
<?php  $i = 1 ?>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row["Foto"];  ?>"> </td>
                <td><?=  $row["Nama Barang"] ?> </td>
                <td><?= $row["Kantor Pusat"]?> </td>
                <td><?= $row["Warna"]?></td>
                <td><?= $row["Harga"]?> </td>
                <td><?= $row["Merk"]?> </td>
                <td><img src="assets/logo/<?= $row["Logo Merk"];  ?>"> </td>
             </tr>
       <?php $i++ ?>

<?php endwhile; ?>
    </table>
</div>

</body>
</html>

