<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM zakat WHERE id='$id'")or die(mysql_error());
 
header("location:beranda.php");
?>