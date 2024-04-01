<?php 
	include "koneksi.php";
	$tempat = $_POST['tempat'];
	
	$query_mysql = mysqli_query($conn,"SELECT SUM(kg),SUM(rupiah)FROM `zakat` WHERE tempat='$tempat';")or die(mysql_error());
	while($data = mysqli_fetch_array($query_mysql)){			 
		
		header('location: laporan.php?data1='.$data['SUM(kg)'].'&data2='.$data['SUM(rupiah)']);		
	}
?>