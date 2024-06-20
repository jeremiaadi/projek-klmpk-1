<?php 
	include "koneksi.php" ;

	$id = $_POST['id_bea'] ;
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$judul = $_POST['judul'] ;
	$deskripsi = $_POST['deskripsi'] ;
	$pengumpulan = $_POST['pengumpulan'] ;
	move_uploaded_file($file_tmp, 'file/'.$foto) ;

	$query = "UPDATE beasiswa SET 
							  judul = '$judul',
							  foto = '$foto',
							  deskripsi = '$deskripsi',
							  pengumpulan = '$pengumpulan'
							  Where 
							  id_bea = '$id'
			 " ;
	if(mysqli_query($koneksi, $query))
	{
		header('location:../beasiswa.php');
	}
	else 
	{
		echo "Update Data Failed";
		mysql_error() ;
	}
?>