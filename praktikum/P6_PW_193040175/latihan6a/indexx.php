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

	<div class="container">
 <?php foreach ($apparel as $app) : ?>
<p class="Nama Barang">
<a href="php/detail.php?Id=<?= $app['Id'] ?>">
<?= $app["Nama Barang"] ?>
</a>
</p>
<?php endforeach; ?>
  
</div>

</body>
</html>

