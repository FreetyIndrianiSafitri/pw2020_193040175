<?php
function koneksi() {
$conn = mysqli_connect("localhost","root","") or die("koneksi ke db gagal");
mysqli_select_db($conn, "tubes_193040175") or die("database salah");


return $conn;
}
function query($sql){

$conn=koneksi();
$result = mysqli_query($conn , "$sql");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}
return $rows;
}
?>
