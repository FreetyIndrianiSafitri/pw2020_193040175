<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$apparel = query("SELECT * FROM apparel")
?>

<!DOCTYPE html>
<html lang="en">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
						<a class="waves-effect waves-light btn" href="php\detail.php?id=<?= $app['id'] ?>">
							<?= $app["nama_barang"] ?>
						</a>
					</p>
				</li>
			</ul>
		<?php endforeach; ?>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>