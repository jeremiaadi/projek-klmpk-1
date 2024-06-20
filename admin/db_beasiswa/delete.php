<?php 
	include "koneksi.php" ;
	$query = "DELETE FROM beasiswa WHERE id_bea = '$_GET[id]' ";

	if(mysqli_query($koneksi, $query))
	{
		header('location:../beasiswa.php');
	}
	else 
	{
		echo "Delete Data Failed";
		mysql_error();
	}
?>