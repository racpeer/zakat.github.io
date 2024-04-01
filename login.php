<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:beranda.php");
}else{
	header("location:index.php");
}
?>