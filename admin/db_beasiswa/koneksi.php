<?php 
	$koneksi  = mysqli_connect(
								"localhost",
								"root",
								"",
								"simple_crud"
								);
	if(mysqli_connect_errno())
	{
		echo "Failed Connection"
		.mysql_connect_error();
	}
?>