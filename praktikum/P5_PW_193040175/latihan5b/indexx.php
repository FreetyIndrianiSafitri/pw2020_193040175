<?php
require 'php/functions.php';
$apparel = query("SELECT * FROM apparel");
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <div class="container">
        <center>
            <h2>APPAREL</h2>
        </center>
        <div class="foto">
            <img src="../assets/img/<?= $apparel["Foto"]; ?>" alt="">
            <table cellpadding="10" cellspacing="0" border="1" bgcolor="lightgrey">

                <tr bgcolor="pink">
                    <th>No</th>
                    <th>Foto </th>
                    <th>Nama Barang</th>
                    <th>Kantor Pusat</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Merk</th>
                    <th>Logo Merk</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($apparel as $aprl) : ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td><img src="assets/img/<?= $aprl["Foto"];  ?>"> </td>
                        <td><?= $aprl["Nama Barang"] ?> </td>
                        <td><?= $aprl["Kantor Pusat"] ?> </td>
                        <td><?= $aprl["Warna"] ?></td>
                        <td><?= $aprl["Harga"] ?> </td>
                        <td><?= $aprl["Merk"] ?> </td>
                        <td><img src="assets/logo/<?= $aprl["Logo Merk"];  ?>"> </td>
                    </tr>
                    <?php $i++ ?>

                <?php endforeach; ?>
            </table>
        </div>

</body>

</html>