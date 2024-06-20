<?php 
	include "koneksi.php" ;
	$query = "DELETE FROM lowongankerja WHERE id_loker = '$_GET[id]' ";

	if(mysqli_query($koneksi, $query))
	{
		header('location:../lowongankerja.php');
	}
	else 
	{
		echo "Delete Data Failed";
		mysql_error();
	}
?>