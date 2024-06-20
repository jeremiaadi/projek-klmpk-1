<!DOCTYPE html>
<html>
<head>
	<title>Manajemen Lowongan Kerja</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Manajemen Lowongan Kerja</h1>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<a href="add.php" class="btn btn-primary mb-4">Insert Data</a>
	  			<table class="table">
				  <thead>
				    <tr>
				      <th>Id</th>
				      <th>Judul</th>
				      <th>Foto</th>
				      <th>Deskripsi</th>
				      <th>Pengumpulan</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		include "koneksi.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($koneksi, 
				  							  "SELECT * FROM beasiswa ORDER BY id_loker DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
				    <tr>
				      <td><?php echo $no++ ; ?></td>
				      <td><?php echo $row['judul'] ; ?></td>
				      <td><img src="file/<?php echo $row['foto'] ; ?>" style="width: 100px;"></td>
				      <td><?php echo $row['deskripsi'] ; ?></td>
				      <td><?php echo $row['pengumpulan'] ; ?></td>
				      <td>
				      	<a href="detail.php?id=<?php echo $row['id_loker'] ; ?>" class="btn btn-primary btn-sm">Detail</a> 
				      	<a href="edit.php?id=<?php echo $row['id_loker'] ; ?>" class="btn btn-success btn-sm">Edit</a> 
				      	<a href="delete.php?id=<?php echo $row['id_loker'] ; ?>"  class="btn btn-danger btn-sm">Delete</a>
				      </td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
				<a href="../home.php" class="btn btn-primary mb-4">Home</a>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
