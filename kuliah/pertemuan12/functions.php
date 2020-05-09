<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
  mysqli_select_db($conn, "pw_193040175") or die("Database salah!");

  return $conn;
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, "$query");

  //jika hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// function query($sql)
// {
//   $conn = koneksi();
//   $results = mysqli_query($conn, "$sql");

//   $rows = [];
//   while ($row = mysqli_fetch_assoc($results)) {
//     $rows[] = $row;
//   };
//   return $rows;
// }


function tambah($data)
{
  $conn = koneksi();
  
  var_dump($data);
  die;
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
            mahasiswa
            VALUES
            ('', '$nama','$nrp','$email','$jurusan','$gambar')";
   mysqli_query($conn, $query);
  //  or die (mysqli_error($conn));
  // echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id) 
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id")or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiwa SET
              nama = '$nama',
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
              WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function cari($keyword) {
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {

  // if( $username == 'admin' && $password == '12345'){
    // set sesion
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit;
  } else {
    return[
      'error ' => true,
      'pesan' => 'username / Password Salah!'
    ];
  }

  function registrasi($data)
  {
    $conn = koneksi();
    $username = htmlspecialchars(strtolower($data['username']));
    $pass1 = mysqli_real_escape_string($conn, $data['pass1']);
    $pass2 = mysqli_real_escape_string($conn, $data['pass2']);

    // jika username atau password kosong
    if (empty($username) || empty($pass1) || empty($pass2)) {
      echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
      return false;
    }

    // jika username sudah terdaftar
    if (query("SELECT * FROM user WHERE username = '$username'") == $data['username']) {
      echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
      return false;
    }

    // Jika konfirmasi password tidak sesuai
    if ($pass1 !== $pass2) {
      echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
      return false;
    }

    // jika password < 5 digit
    if (strlen($pass1) < 5) {
      echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
      return false;
    }

    // Jika username dan password sudah sesuai
    // enkrpsi password
    $password_baru = password_hash($pass1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
  }
  }
}