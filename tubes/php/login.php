<?php
session_start();
require 'functions.php';


//melakukan pengecekan apakah user sudah melakukan login jika sudah redircet ke halaman
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];


// ambil username berdasarkan id
$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  
//mecocokan USERNAME dan PASSWORD
if (mysqli_num_rows($cek_user) > 0) {
  $row = mysqli_fetch_assoc($cek_user);
  if (password_verify($password, $row['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['hash'] = hash('sha256', $row['id'], false);
//jika remember me dicentang
    if (isset($_POST['remember'])) {
      setcookie('username', $row['username'], time() + 60 * 60 * 24);
      $hash = hash('sha256', $row['id']);
      setcookie('hash', $hash, time() + 60 * 60 * 24);
    }
    

  
  if (hash('sha256', $row['id']) == $_SESSION['hash']) {
    header("Location: admin.php");
    die;
  }
}
  header("Location: ../index.php");
  die;
}


  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
      <h3 style="text-align: center;">LOGIN</h3>
    <a href="login.php"></a>

    <form action="" method="POST">
      <div class="row">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align:center;">Username atau Password salah</p>
        <?php endif; ?>

        <div class="row">
          <div class="input-field col s6 offset-s3">
            <label for="username">Username</label>
            <input type="text" name="username" class="validate">
          </div>
          <div class="row">
            <div class="input-field col s6 offset-s3">
              <label for="password">Password</label>
              <input type="password" name="password">
            </div>
          </div>
            <p style="text-align: center;">
              <label>
                <input type="checkbox" class="filled-in" name="remember" />
                <span>Remember ME</span>
              </label>
            </p>
        </div>

        <center>
          <button class="waves-effect blue darken-4 btn" type="submit" name="submit">Login</button>
        </center>
        <center>
          <div class="registrasi">
            <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
          </div>
        </center>

      </div>
    </form>

    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>