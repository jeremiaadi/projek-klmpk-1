<?php 
	$koneksi = mysqli_connect(
								"localhost",
								"root",
								"",
								"projek-klmpk-1"
	);
	if(mysqli_connect_errno())
	{
		echo "Koneksi Gagal " .mysqli_connect_error() ;
	}
?>