<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * FROM lowongankerja WHERE id_loker = '$_GET[id]' ") ;
	$row = mysqli_fetch_array($data) ;

	$foto = $row['foto'] ;
	if(file_exists('file/'.$foto))
	{
		unlink('file/'.$foto) ;
	}
	$query = "DELETE FROM lowongankerja WHERE id_loker = '$_GET[id]' ";
	mysqli_query($koneksi, $query) or die ("SQL Error ".mysqli_error()) ;
	header('location:index.php')
?>