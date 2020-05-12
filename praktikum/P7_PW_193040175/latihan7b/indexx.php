<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//pengkondisian untuk mengubah query pengisi variabel
if (isset($_GET['carikan'])) {
	$kata = $_GET['kata'];
	$apparel = query("SELECT * FROM apparel WHERE
            nama_barang LIKE '%$kata%' ");
} else {
	//melakukan query
	$apparel = query("SELECT * FROM apparel");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 2</title>
</head>

<body style="background-color: lightpink;">
	<div class="nav-wrapper  pink darken-1">
		<a href="#" class="brand-logo">PASSION STORE</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="php/admin.php" class="waves-effect green darken-3 btn">LOGIN</a></li>
			<li>
				<form action="" method="GET">
					<button class="waves-effect blue darken-4 btn" type="text" name="carikan">Cari!</button>
			</li>
			<li>
				<div class="row col pink darken-2">
					<div class="input-field col s12">
						<input type="text" id="kata" name="kata" class="validate" autofocus>
						<label for="kata" class="active">CARI</label>
					</div>
				</div>
				</form>
			</li>

		</ul>
	</div>
	</nav>

	<div class="row">

		<div class="container">
			<h1 style="text-align:center;">NAMA PAKAIAN</h1>
			<?php if (empty($apparel)) : ?>
				<tr>
					<td colspan="7">
						<h1>Data tidak Ditemukan</h1>
					</td>
				</tr>
			<?php else : ?>
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
	<?php endif; ?>


	<script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>