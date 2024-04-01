<?php 
include 'koneksi.php';
$date = $_POST['date'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jenis = $_POST['jenis'];
$kg = $_POST['kg'];
$rp = $_POST['rp'];
$petugas = $_POST['petugas'];
$tempat = $_POST['tempat'];
 
mysqli_query($conn,"INSERT INTO zakat VALUES('','$date','$nama','$alamat','$telp','$jenis','$kg','$rp','$petugas','$tempat')");
 
header("location:beranda.php");
?>