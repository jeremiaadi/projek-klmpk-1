<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * from beasiswa where id_bea = '$_GET[id]' " );
	$row = mysqli_fetch_array($data) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Blog Beasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .image {
            text-align: center;
            margin-bottom: 20px;
        }
        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .section {
            border: 1px solid #000;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            margin-bottom: 10px;
            text-align: left;
        }
        .section p {
            text-align: left;
        }
        .contact {
            text-align: center;
            margin-top: 20px;
        }
        .contact a {
            margin: 0 10px;
            color: blue;
            text-decoration: none;
        }
        .contact a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo $row['judul'] ; ?></h1>
        <div class="image">
        <img src="file/<?php echo $row['foto'] ; ?>" style="width: 100px;">
        </div>
        <div class="section">
            <h2>Deskripsi</h2>
            <p><?php echo $row['deskripsi'] ; ?></p>
        </div>
        <div class="section">
            <h2>TEMPAT PENGUMPULAN</h2>
            <p><?php echo $row['pengumpulan'] ; ?></p>
        </div>
        <div>
	  		<a href="../beasiswa.php">Kembali</a>
	  	</div>
    </div>
</body>
</html>
