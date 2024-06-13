<!DOCTYPE html>
<html>
<head>
	<title>Fitur Upload Foto dengan PHP & Mysql</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="conteiner">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Fitur Upload Foto dengan PHP & Mysql</h2>
					By : <a href="https://www.rullystudio.com">Rully Studio</a>
				</div>
				<div class="col-md-12 mt-5">
					<form enctype="multipart/form-data" method="post" action="upload.php">

						<div class="mb-3">
						  <label class="form-label">Judul</label>
						  <input type="text" name="judul" class="form-control" >
						</div>

						<div class="mb-3">
						  <label class="form-label">Foto</label>
						  <input type="file" name="foto" class="form-control" >
						</div>

						<div class="mb-3">
						  <label class="form-label">Deskripsi</label>
						  <input type="text" name="deskripsi" class="form-control" >
						</div>

						<div class="mb-3">
						  <label class="form-label">Pengumpulan</label>
						  <input type="text" name="pengumpulan" class="form-control" >
						</div>

						<div class="mb-3 text-end">
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>