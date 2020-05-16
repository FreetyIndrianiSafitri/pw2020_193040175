<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0" class="striped">
  <tr>
    <td>#</td>
    <td>Gambar</td>
    <td>Nama</td>
    <td>Aksi</td>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color : red; font-style: italic;">!!!Data Mahasiswa Tidak Ditemukan!!!</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a class="waves-effect waves-light btn" href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>