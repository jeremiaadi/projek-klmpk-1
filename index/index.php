<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berakar</title>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<?php include 'header.php'; ?>

</html>
  <body>
      <div class="stats">
        <div class="stat lowongan-kerja">
        <?php
        // Koneksi ke database lowongan kerja
        include "admin/db_loker/koneksi.php";
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
        include "admin/db_beasiswa/koneksi.php";
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
      <body> 
        <div class="content">
        <h2>Lowongan Kerja</h2>
            <div class="card-group">
            <?php 
                include "admin/db_loker/koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM lowongankerja ORDER BY id_loker DESC");
                $counter = 0;
                while($row = mysqli_fetch_array($data)) {
                    if ($counter >= 3) { 
                        break; 
                    }
            ?>
            <div class="card">
                <img src="admin/db_loker/file/<?php echo $row['foto']; ?>" style="width: 100px;">
                <h3><b><?php echo $row["judul"]; ?></b></h3>
            </div>
            <?php 
                    $counter++; 
                } 
            ?>
            </div>
            <a href="karir.php" class="read-more">baca selengkapnya</a>
        </div>
    </div>
            <div class="content">
            <h2>Beasiswa</h2>
                <div class="card-group">
                <?php 
                    include "admin/db_beasiswa/koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM beasiswa ORDER BY id_bea DESC");
                    $counter = 0;
                    while($row = mysqli_fetch_array($data)) {
                        if ($counter >= 3) { 
                            break; 
                        }
                ?>
                <div class="card">
                    <img src="admin/db_beasiswa/file/<?php echo $row['foto']; ?>" style="width: 100px;">
                    <h3><b><?php echo $row["judul"]; ?></b></h3>
                </div>
                <?php 
                        $counter++; 
                    } 
                ?>
                </div>
                <a href="beasiswa.php" class="read-more">baca selengkapnya</a>
            </div>
        </div>
    <script src="script.js"></script>
  </body>
 
<?php include 'footer.php'; ?>

</html>
