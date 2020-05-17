<?php
    //function untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost","root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040175") or die ("Database salah!");

        return $conn;
    }

    //function untuk melakukan query ke database
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn,"$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        };

        return $rows;
    }

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    //ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //     alert('pilih gambar terlebih dahulu');
        //   </script>";
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
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}


// upload logo

function uploadLogo()
{
    $nama_file = $_FILES['logo_merk']['name'];
    $tipe_file = $_FILES['logo_merk']['type'];
    $ukuran_file = $_FILES['logo_merk']['size'];
    $error = $_FILES['logo_merk']['error'];
    $tmp_file = $_FILES['logo_merk']['tmp_name'];

    //ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //     alert('pilih gambar terlebih dahulu');
        //   </script>";
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
    move_uploaded_file($tmp_file, '../assets/logo/' . $nama_file_baru);

    return $nama_file_baru;
}

//fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();
    
    // $foto = htmlspecialchars($data['foto']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $stok_tersedia = htmlspecialchars($data['stok_tersedia']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $merk = htmlspecialchars($data['merk']);
    // $logo_merk = htmlspecialchars($data['logo_merk']);

    // untuk upload gambar
    $foto = upload();

    if (!$foto) {
        return false;
    }

    // Untuk Upload Logo
    $logo_merk = uploadLogo();
    if (!$logo_merk) {
        return false;
    }

    $query = "INSERT INTO apparel
                    VALUES 
                    ('','$foto','$nama_barang','$stok_tersedia','$warna','$harga','$merk','$logo_merk')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi menghapus data
function hapus($id)
{
    $conn = koneksi();

    $app = query("SELECT * FROM apparel WHERE id = $id ");
    if ($app[0]['foto'] != 'no.jpg' || $app[0]['logo_merk'] != 'no.jpg' ) {
        unlink('../assets/img/' . $app[0]['foto']);
        unlink('../assets/logo/' . $app[0]['logo_merk']);

    } 

    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $stok_tersedia = htmlspecialchars($data['stok_tersedia']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $merk = htmlspecialchars($data['merk']);
    $logo_merk = htmlspecialchars($data['logo_merk']);

    $foto = upload();
    if (!$foto) {
        return false;
    }
    if ($foto == 'no.jpg') {
        $foto = $gambar_lama;
    }

    $query = "UPDATE apparel SET
              foto = '$foto',
              nama_barang = '$nama_barang',
              stok_tersedia = '$stok_tersedia',
              warna = '$warna',
              harga = '$harga',
              merk = '$merk',
              logo_merk = '$logo_merk'
              WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

$conn = koneksi();

    $query = "SELECT * FROM apparel WHERE
                foto LIKE '%$keyword%' OR
                nama_barang LIKE '%$keyword%' OR
                stok_tersedia LIKE '%$keyword%' OR
                warna LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                merk LIKE '%$keyword%' OR
                logo_merk LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
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
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>