<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * from lowongankerja where id_loker = '$_GET[id]' " );
	$row = mysqli_fetch_array($data) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Lowongan Kerja</title>
    <style>
    body {
  display: flex;
  margin: 0;
  font-family: Arial, sans-serif;
}

.sidebar {
  width: 250px;
  background-color: #800000;
  color: white;
  padding: 20px;
  height: 100vh;
}

.sidebar .logo {
  display: flex;
  align-items: left;
}
.sidebar .logo img {
  width: 40px;
  height: auto;
  margin-right: 10px;
  margin-top: 15px;
}
. .logo h1 {
  font-size: 24px;
  margin: 5;
  color: #fdfdfd;
  margin-top: 10px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
}

.sidebar ul li {
  margin: 20px 0;
}

.sidebar ul li a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}
        .main {
            flex: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo img {
            margin-right: 10px;
        }
        .main-content {
            flex-grow: 1;
  padding: 20px;
}

.topbar {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.menu-btn {
  font-size: 24px;
  background: none;
  border: none;
  color: #800000;
  margin-right: 20px;
}

.search-bar {
  display: flex;
  align-items: center;
}
.search-bar input[type="text"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
  width: 250px;
}
.search-bar button {
  padding: 10px 20px;
  border: none;
  background-color: #750000;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
}
.search-bar button:hover {
  background-color: #900;
}

.container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 90%; /* Perbarui width menjadi 90% untuk memenuhi layar */
    max-width: 1200px; /* Tambahkan max-width untuk membatasi lebar maksimum */
    height: 90vh; /* Perbarui height menjadi 90vh untuk memenuhi layar */
    overflow-y: auto; /* Tambahkan overflow-y untuk scrolling jika konten terlalu tinggi */
}

h1 {
    text-align: center;
    color: #800000;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    height: 100px;
    resize: vertical;
}

.file-input {
    display: flex;
    align-items: center;
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    padding: 10px 0;
}

.file-input img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

.file-input input[type="file"] {
    display: none;
}

.file-input span {
    color: #888;
}

.form-buttons {
    display: flex;
    justify-content: space-between;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-reset {
    background-color: #800000;
    color: white;
}

.btn-submit {
    background-color: #800000;
    color: white;
}
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
          <img src="../../assets/logo1.png" alt="Berakar Logo" />
          <h1>Berakar</h1>
        </div>
        <ul>
        <li><a href="../home.php">Dashboard</a></li>
        <li><a href="../lowongankerja.php">Manajemen Lowongan Kerja</a></li>
        <li><a href="../beasiswa.php">Manajemen Beasiswa</a></li>
        <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
        <body>
            <div class="container">
                <h1>Masukan Judul</h1>
                <form enctype="multipart/form-data" method="post" action="update.php">
                <input type="hidden" name="id_loker" value="<?php echo $row['id_loker'] ; ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
					    <input type="text" name="judul" value="<?php echo $row['judul'] ; ?>">
                    </div>
                    <div class="form-group">
						<label>Foto</label>
					    <input type="file" name="foto" value="<?php echo $row['foto'] ; ?>">
					</div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" rows="3"><?php echo $row['deskripsi'] ; ?></textarea>
                        </div>
                    <div class="form-group">
                        <label for="pengumpulan">Pengumpulan</label>
                        <textarea name="pengumpulan" rows="3"><?php echo $row['pengumpulan'] ; ?></textarea>
                    </div>
                    <button href="../lowongankerja.php" type="reset" class="btn btn-reset">Kembali</button>
                    <button type="submit" class="btn btn-submit">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>