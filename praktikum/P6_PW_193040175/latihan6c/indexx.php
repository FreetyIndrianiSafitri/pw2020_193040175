<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$apparel = query("SELECT * FROM apparel")
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tugas 2</title>
</head>

<body bgcolor="lavender">
	<div class="container">
		<h1>APPAREL COLECTION</h1>
		<?php foreach ($apparel as $app) : ?>
			<ul>
				<li>
					<p class="nama">
						<a href="php\detail.php?id=<?= $app['id'] ?>">
							<?= $app["nama_barang"] ?>
						</a>
					</p>
				</li>
			</ul>
		<?php endforeach; ?>
	</div>
</body>

</html>