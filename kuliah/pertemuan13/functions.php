<?php

function  koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040175');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  //jika hasilnya  hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  //ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu');
          </script>";
    return 'no.jpg';
  }

  //cek extension file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
         </script>";
    return false;
  }

  //cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
             alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  //cek ukuran file
  //maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
           alert('ukuran file terlalu besar');
          </script>";
    return false;
  }

  //jika lolos pengecekan ukuran dan tipe file
  //siap upload file
  //generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  // $gambar = htmlspecialchars($data['gambar']);

  // untuk upload gambar
  $gambar = upload();


  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
            mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar' );
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // untuk menghapus gambar di folder img
  $m = query("SELECT * FROM mahasiswa WHERE id = $id ");
  if ($m['gambar'] != 'no.jpg') {
    unlink('img/' . $m['gambar']);
  }
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar_awal = htmlspecialchars($data['gambar_awal']);


  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  if ($gambar == 'no.jpg') {
    $gambar = $gambar_awal;
  }

  
  $query = "UPDATE mahasiswa SET 
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


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa 
            WHERE nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  //cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username' && password = '$password'")) {

    // if (password_verify($password, $user['password'])) {
      //set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username atau Password salah!'
  ];


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username atau password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";

    return false;
  }

  //jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username' ")) {
    echo "<script>
    alert('username sudah terdaftar!');
    document.location.href = 'registrasi.php';
  </script>";

    return false;
  }

  //jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
      alert('Konfirmasi password tidak sesuai!');
      document.location.href = 'registrasi.php';
    </script>";

    return false;
  }

  //jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
    alert('password minimal 5 digit!');
    document.location.href = 'registrasi.php';
  </script>";

    return false;
  }

  //jika password < 5 digit
  if (strlen($username) < 5) {
    echo "<script>
    alert('username minimal 5 digit!');
    document.location.href = 'registrasi.php';
  </script>";

    return false;
  }

  //jika username & password sudah sesuai
  //enskripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  //INSERT KE TABLE USER
  $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
