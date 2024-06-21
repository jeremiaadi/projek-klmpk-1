<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Grid</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .content {
            width: 80%;
            text-align: center;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .item {
            text-align: center;
            width: 250px; 
        }

        .photo {
            margin-bottom: 10px;
            border: 1px solid #6C0C0C;
            border-radius: 5px;
            box-shadow: 1px 1px 5px black;
        }

        .title {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .read-more {
            color: #6C0C0C;
            cursor: pointer;
            font-size: 16px;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .page-link {
            margin: 0 5px;
            padding: 10px 15px;
            border: 1px solid #6C0C0C;
            border-radius: 5px;
            background-color: #6C0C0C;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }

        .page-link:hover {
            background-color: #A52A2A;
        }
        
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="content">
            <h2>Lowongan Kerja</h2>
            <div class="grid" id="photoGrid">
                <?php 
                include "admin/db_loker/koneksi.php";
                $limit = 8;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($page - 1) * $limit;

                $totalData = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM lowongankerja");
                $totalData = mysqli_fetch_assoc($totalData)['total'];
                $totalPages = ceil($totalData / $limit);
                $data = mysqli_query($koneksi, "SELECT * FROM lowongankerja ORDER BY id_loker DESC LIMIT $limit OFFSET $offset");

                while($row = mysqli_fetch_array($data)) {
                ?>
                <div class="item">
                    <img class="photo" src="admin/db_loker/file/<?php echo $row['foto']; ?>" style="width: 100px;">
                    <h3><b><?php echo $row["judul"]; ?></b></h3>
                    <td>
				      	<a href="detail_loker.php?id=<?php echo $row['id_loker'] ; ?>">Baca selengkapnya</a> 
				    </td>
                </div>
                <?php 
                }
                ?>
            </div>
            <div class="pagination">
                <?php 
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<a class='page-link' href='?page=$i'>$i</a>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
