<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <title>Berakar - Manajemen Beasiswa</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            overflow: hidden; /* Prevent scrolling on the body */
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
        }

        .sidebar .logo {
            display: flex;
            align-items: center;
        }

        .sidebar .logo img {
            width: 40px;
            height: auto;
            margin-right: 10px;
            margin-top: 15px;
        }

        .sidebar .logo h1 {
            font-size: 24px;
            margin: 5px 0;
            color: #fdfdfd;
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
            margin-left: 250px; /* Space for the sidebar */
            padding: 20px;
            overflow-y: auto; /* Allow vertical scrolling */
            width: calc(100% - 250px);
            height: 100vh;
            box-sizing: border-box;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card table {
            width: 100%;
            border-collapse: collapse;
        }

        .card th, .card td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .card th {
            background-color: #f2f2f2;
        }

        .card .add-button {
            background-color: #800000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 8px;
        }

        .card .add-button:hover {
            background-color: #a50000;
        }

        .card .total-count {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .card .total-count .count {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
        }

        .card .total-count .icon {
            width: 30px;
            height: 30px;
            background-color: #800000;
            color: white;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../assets/logo1.png" alt="Berakar Logo" />
            <h1>Berakar</h1>
        </div>
        <ul>
            <li><a href="home.php">Dashboard</a></li>
            <li><a href="lowongankerja.php">Manajemen Lowongan Kerja</a></li>
            <li><a href="beasiswa.php">Manajemen Beasiswa</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="card">
            <h2>Manajemen Beasiswa</h2>
            <div class="stat beasiswa">
                <?php
                // Koneksi ke database beasiswa
                include "db_beasiswa/koneksi.php";
                $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total_beasiswa FROM beasiswa");
                $data_beasiswa = mysqli_fetch_assoc($result);
                $total_beasiswa = $data_beasiswa['total_beasiswa'];
                ?>
                <div class="stat-info">
                    <h3>Total Beasiswa</h3>
                    <p><?php echo $total_beasiswa; ?></p>
                </div>
            </div>   
            <div>
                <a href="db_beasiswa/add.php" class="add-button">Masukan Beasiswa Baru</a>
            </div> 
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
                            include "db_beasiswa/koneksi.php";
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM beasiswa ORDER BY id_bea DESC");
                            while($row = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><img src="db_beasiswa/file/<?php echo $row['foto']; ?>" style="width: 100px;"></td>
                            <td><?php echo $row['deskripsi']; ?></td>
                            <td><?php echo $row['pengumpulan']; ?></td>
                            <td>
                                <a href="db_beasiswa/detail.php?id=<?php echo $row['id_bea']; ?>" class="btn btn-primary btn-sm">Detail</a> 
                                <a href="db_beasiswa/edit.php?id=<?php echo $row['id_bea']; ?>" class="btn btn-success btn-sm">Edit</a> 
                                <a href="db_beasiswa/delete.php?id=<?php echo $row['id_bea']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
