<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <title>Berakar - Dashboard Admin</title>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
      }

      .sidebar {
        width: 250px;
        background-color: #800000;
        color: white;
        padding: 20px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        overflow-y: auto;
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
      .sidebar .logo h1 {
        font-size: 24px;
        margin: 0;
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

      .main-content {
        margin-left: 300px; /* Same as sidebar width */
        padding: 20px;
        flex-grow: 1;
      }

      .topbar {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }

      .main-content {
        margin-left: 300px; /* Same as sidebar width */
        flex-grow: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
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
        cursor: pointer;
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

      .stats {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      .stat {
        display: flex;
        align-items: center;
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 5px;
        flex-grow: 1;
        margin-right: 10px;
      }

      .stat-icon {
        font-size: 24px;
        margin-right: 10px;
      }

      .stat-info h3 {
        margin: 0;
        font-size: 16px;
      }

      .stat-info p {
        margin: 0;
        font-size: 24px;
      }

      .stat.lowongan-kerja {
        background-color: #ffe0e0;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.5);
      }

      .stat.beasiswa {
        background-color: #e0e0ff;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.5);
      }

      .stat.pengguna {
        background-color: #e0ffe0;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.5);
      }

      .section {
        margin-bottom: 20px;
      }

      .section h2 {
        margin-bottom: 10px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      table,
      th,
      td {
        border: 1px solid #ddd;
      }

      th,
      td {
        padding: 10px;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo">
        <img src="../assets/logo1.png" alt="Berakar Logo" />
        <h1>Berakar</h1>
      </div>
      <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="lowongankerja.php">Manajemen Lowongan Kerja</a></li>
        <li><a href="beasiswa.php">Manajemen Beasiswa</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
      <div class="stats">
      <div class="stat lowongan-kerja">
        <?php
        // Koneksi ke database lowongan kerja
        include "db_loker/koneksi.php";
        $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total_lowongan FROM lowongankerja");
        $data_loker = mysqli_fetch_assoc($result);
        $total_lowongan = $data_loker['total_lowongan'];
        ?>
          <div class="stat-icon">💼</div>
          <div class="stat-info">
            <h3>Total Lowongan Kerja</h3>
            <p><?php echo $total_lowongan; ?></p>
          </div>
        </div>
        <div class="stat beasiswa">
        <?php
        // Koneksi ke database beasiswa
        include "db_beasiswa/koneksi.php";
        $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total_beasiswa FROM beasiswa");
        $data_beasiswa = mysqli_fetch_assoc($result);
        $total_beasiswa = $data_beasiswa['total_beasiswa'];
        ?>
          <div class="stat-icon">📚</div>
          <div class="stat-info">
            <h3>Total Beasiswa</h3>
            <p><?php echo $total_beasiswa; ?></p>
          </div>
        </div>
      </div>
      <div class="section">
        <h2>Manajemen Lowongan Kerja</h2>
        <table>
        <div class="col-md-12 mt-5">
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
				  		include "db_loker/koneksi.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($koneksi, 
				  							  "SELECT * FROM lowongankerja ORDER BY id_loker DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
				    <tr>
				      <td><?php echo $no++ ; ?></td>
				      <td><?php echo $row['judul'] ; ?></td>
				      <td><img src="db_loker/file/<?php echo $row['foto'] ; ?>" style="width: 100px;"></td>
				      <td><?php echo $row['deskripsi'] ; ?></td>
				      <td><?php echo $row['pengumpulan'] ; ?></td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
	  		</div>
        </table>
        <div class="col-md-12 mt-5">
        <h2>Manajemen Beasiswa</h2>
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
				  		include "db_beasiswa/koneksi.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($koneksi, 
				  							  "SELECT * FROM beasiswa ORDER BY id_bea DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
				    <tr>
				      <td><?php echo $no++ ; ?></td>
				      <td><?php echo $row['judul'] ; ?></td>
				      <td><img src="db_beasiswa/file/<?php echo $row['foto'] ; ?>" style="width: 100px;"></td>
				      <td><?php echo $row['deskripsi'] ; ?></td>
				      <td><?php echo $row['pengumpulan'] ; ?></td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
      </div>
      <div class="section">
      
                </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>

<?php 
}else{
     header("Location: home.php");
     exit();
}
 ?>