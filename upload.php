<?php 
	include "koneksi.php" ;
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$judul = $_POST['judul'] ;
	$deskripsi = $_POST['deskripsi'] ;
	$pengumpulan = $_POST['pengumpulan'] ;
	move_uploaded_file($file_tmp, 'file/'.$foto) ;
	$query = "INSERT INTO lowongankerja SET 
								    judul = '$judul',
								    foto = '$foto',
									deskripsi = '$deskripsi',
									pengumpulan = '$pengumpulan'
	";
	mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error());
	header('location:index.php');
?>