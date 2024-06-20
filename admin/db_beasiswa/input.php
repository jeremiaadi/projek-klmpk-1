<?php 
	include "koneksi.php";
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	$judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
	$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
	$pengumpulan = mysqli_real_escape_string($koneksi, $_POST['pengumpulan']);
	move_uploaded_file($file_tmp, 'file/'.$foto);
	$query = "INSERT INTO beasiswa SET 
								    judul = '$judul',
								    foto = '$foto',
									deskripsi = '$deskripsi',
									pengumpulan = '$pengumpulan'
			 ";
	if(mysqli_query($koneksi, $query)){
		header('location:../beasiswa.php');
	}
	else
	{
		echo "input data gagal <br>";
		echo mysqli_error($koneksi); 
	}
?>
