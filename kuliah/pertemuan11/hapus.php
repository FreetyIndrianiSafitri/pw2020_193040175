<?php 
require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

  if (hapus($id) > 0) {
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
  } else {
    echo "data gagal ditambahkan!";
  }


?>