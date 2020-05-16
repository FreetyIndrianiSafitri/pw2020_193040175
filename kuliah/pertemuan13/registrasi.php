<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan! silahkan login!');
            document.location.href = 'login.php';

          </script>";
  } else {
    echo "user gagal ditambahkan!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <title>Registrasi</title>
</head>

<body style="background-color: lightgrey;">
  <div class="container">
    <h3 style="text-align: center;">FORM REGISTRASI</h3>
    <div class="row">
      <form action="" method="POST">
        <div class="row">
          <div class="input-field col s4 offset-s4">
            <label class="active" for="username">Username</label>
            <input type="text" name="username" autofocus autocomplete="off" required>
          </div>
          <div class="input-field col s4 offset-s4">
            <label class="active" for="password1">Password</label>
            <input type="password" name="password1" required>
            </label>
          </div>
          <div class="input-field col s4 offset-s4">
            <label class="active" for="password2">Konfirmasi Password</label>
            <input type="password" name="password2" required>
            </label>
          </div>
          <button class="waves-effect waves-light btn col s2 offset-s5" type="submit" name="registrasi">Registrasi</button>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>