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