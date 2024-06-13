<!DOCTYPE html>
<html>
<head>
	<title>Fitur Upload Foto dengan PHP & Mysql</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body> 
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<h2>Fitur Upload Foto dengan PHP & Mysql</h2>
					By : <a href="https://www.rullystudio.com">Rully Studio</a>
				</div>
				<div class="col-md-12 mt-4">
					<a href="form_upload.php" class="btn btn-success mb-4">Upload</a>
					<?php 
						include "koneksi.php" ;
						$data = mysqli_query($koneksi, "SELECT * FROM lowongankerja order by id_loker DESC") ;
						while ($row = mysqli_fetch_array($data)) {
					?>

					<div class="col-md-12 row mb-5">
						<div class="col-md-3">
							<img src="file/<?php echo $row['foto'] ; ?>" style="width: 100%;">
						</div>
						<div class="col-md-9">
							<h2><?php echo $row['judul'] ; ?></h2>
							<a href="delete.php?id=<?php echo $row['id_loker'] ; ?>" class="btn btn-danger mt-4">Delete</a>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>