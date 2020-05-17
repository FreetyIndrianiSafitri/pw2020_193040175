<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

// session_start();

// if (!isset($_SESSION['login'])) {
// 	header("Location: login.php");
// 	exit;
// }

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/latihan7c.css">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>fy' Pasion Store Colection</title>
</head>

<body id="home" class="scrollspy">

  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="grey darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo" class="light pink-text text-accent-2">fy' Paesyeon Store Colections</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="brown-text text-lighten-4" href="#product">Product</a></li>
            <li><a class="brown-text text-lighten-4" href="#portfolio">Brand</a></li>
            <li><a class="brown-text text-lighten-4" href="#about">Catalog</a></li>
            <li><a class="brown-text text-lighten-4" href="#payment">Payment</a></li>
            <li><a href="#login" class="waves-effect pink darken-1 btn btn"> Login</a></li>
            <li><a href="php/admin.php" class="waves-effect pink darken-1 btn">ADMIN</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#product">Product</a></li>
    <li><a href="#ortfolio">Brand</a></li>
    <li><a href="#about">Catalog</a></li>
    <li><a href="#payment">Payment</a></li>
    <li><a href="#login" class="btn pink accent-2">Login</a></li>
    <li><a href="php/admin.php" class="waves-effect pink darken-1 btn">ADMIN</a></li>

  </ul>
  <!-- akhir navbar -->

  <!-- slider -->
  <div class="slider">
    <div class="container">
      <ul class="slides">
        <li>
          <img src="assets/img/slider/A.jfif">
          <div class="caption center-align">
            <h3 class="light pink-text text-accent-2">"Even though appearance isn't everything, it's still the appearance that is seen for the first time. Therefore, by having a high sense of fashion can create a beautiful impression."</h3>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/2.jfif">
          <div class="caption center-align">
            <h3 class="light pink-text text-accent-2">"The way you play with fashion shows your true personality, so be smart to integrate existing fashion so that you look cool."</h3>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/B.jfif">
          <div class="caption center-align">
            <h3 class="light pink-text text-accent-2">"Even someone's characteristics can be seen from the way she uses fashion."</h3>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!--akhir slider-->


  <!-- <div class="nav-wrapper  pink darken-1">
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
			</li> -->

  </ul>
  </div>
  </nav>

  <!-- product -->
  <section id="product" class="product brown lighten-4 scrollspy">
    <div class="container center">
      <h3 class="center light grey-text pink text-darken-3">fy' Paesyeon Store</h3>
      <ul class="collection with-header">
        <li class="collection-header">
          <h4>Klik to view more info!</h4>
        </li>
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
                  <a class="waves-effect waves-light btn" href="php/detail.php?id=<?= $app['id'] ?>">

                    <button type="admin.php"></button>
                    <?= $app["nama_barang"] ?>
                  </a>
                </p>
              </li>
            </ul>
          <?php endforeach; ?>
    </div>
  <?php endif; ?>
  </ul>
  </div>
  </section>
  <!-- akhir product -->

  <!-- portfolio -->
  <section id="portfolio" class="portfolio-container scrollspy">
    <div class="container">
      <h3 class="center pink-text text-accent-2">Brand</h3>
      <div class="row">
        <div class="col m3 s12">
          <img src="assets/logo/Chanel.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/dior.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/Gucci.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/hermes.png" class="responsive-img materialboxed">
        </div>
      </div>
      <div class="row">
        <div class="col m3 s12">
          <img src="assets/logo/hm.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/korz.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/levis_cp.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="assets/logo/prada.png" class="responsive-img materialboxed">
        </div>
      </div>
    </div>
  </section>

  <!--  About Us -->
  <section id="about" class="product brown lighten-4 scrollspy">
    <div class="container caption center-align">
      <div class="row caption center-align">
        <h3 class="center light grey-text pink text-darken-3">Catalog</h3>
        <div class="col m12 light">
          <h4>fy' Pasion Store Colection</h4>
          <div class="caption center-align">
            <h5 class="light red-text text-accent-2">"If you have an attractive fashion, people can look at you great. Of course it is wanted by everyone, right?"</h5>
          </div>
          <div class="caption center-align">
            <h5 class="light red-text text-accent-2">"I know everyone would want to look the most beautiful, but are you sure you've become beautiful with your fashion?"</h5>
          </div>
          <div class="caption center-align">
            <h5 class="light red-text text-accent-2">"Remember friends, first impression are things that are always remembered. So, look your best with the fashion you have."</h5>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- payment  -->
  <section id="payment" class="parallax-container scrollspy">
    <div class="parallax"><img src="assets/img/bg_parallax/bb.jfif"></div>

    <div class="container payment">
      <h3 class="center pink-text text-accent-2">Payment partners</h3>
      <div class="row">
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bri.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bca.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/mandiri.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bjb.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/bni.png">
        </div>
        <div class="col m2 s12 center">
          <img src="assets/img/payment_partners/btn.png">
        </div>
      </div>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/indomaret.png">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/alfamidi.png">
        </div>
        <div class="col m4 s12 center">
          <img src="assets/img/payment_partners/alfamart.png">
        </div>
      </div>
    </div>
  </section>
  <!-- akhir payment -->


  <!-- login -->
  <section id="login" class="login brown lighten-4 scrollspy">
    <div class="container">
      <div class="row">
        <div class="col m5 s12 ">
          <div class="card-panel grey darken-4 center brown-text text-lighten-4">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Jika ada kendala atau masalah silahkan hubungi kami dengan mengirimkan email ke alamat fyistore@gmail.com</p>
          </div>
          <div>
            <ul class="collection with-header brown-text text-lighten-4">
              <li class="collection-header grey darken-4">
                <h4>Our Store</h4>
              </li>
              <li class="collection-item grey darken-4">fy' Paesyeon Store Colection</li>
              <li class="collection-item grey darken-4">Jl. Setiabudhi, Kota Bandung </li>
              <li class="collection-item grey darken-4">West Java, Indonesia</li>
            </ul>
          </div>
        </div>

        <div class="col m7 s12">
          <form>
            <div class="card-panel grey darken-4 brown-text text-lighten-4">
              <h5>Login</h5>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" class="validate">
                <label for="email">E-mail</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" class="validate">
                <label for="password">Password</label>
              </div>
              <button type="submit" class="waves-effect pink darken-1 btn btn">Login</button>

              <h5 class="border">Didn't have an account? <br> Please fill out this form for registation</h5>
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="name" id="name" required class="validate">
                <label for="name"> Name</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" class="validate">
                <label for="email">E-mail</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">local_phone</i>
                <input type="text" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>
              <button type="submit" class="waves-effect pink darken-1 btn btn">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir login -->

  <!-- footer -->
  <footer class="grey darken-4 pink-text text-accent-2 center">
    <p class="flow-text"> fy' Paesyeon Store Colection by Freety Indriani Safitri 2020</p>
  </footer>
  <!-- akhir footer -->


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 650,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>


</body>

</html>