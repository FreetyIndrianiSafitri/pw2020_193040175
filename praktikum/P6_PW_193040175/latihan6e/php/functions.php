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
        }

        return $rows;
    }

//fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();
    
    $foto = htmlspecialchars($data['foto']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $stok_tersedia = htmlspecialchars($data['stok_tersedia']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $merk = htmlspecialchars($data['merk']);
    $logo_merk = htmlspecialchars($data['logo_merk']);



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
    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto = htmlspecialchars($data['Foto']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $stok_tersedia = htmlspecialchars($data['stok_tersedia']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $merk = htmlspecialchars($data['merk']);
    $logo_merk = htmlspecialchars($data['logo_merk']);

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

?>