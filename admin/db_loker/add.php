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
    height: 100vh;
    overflow: hidden; /* Hanya memungkinkan scroll pada main-content */
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
    align-items: flex-start;
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
    margin-left: 270px; /* Lebar sidebar + beberapa pixel untuk spasi */
    padding: 20px;
    flex-grow: 1;
    overflow-y: auto; /* Memungkinkan scroll vertikal pada konten utama */
    height: 100vh; /* Memastikan main-content memenuhi tinggi layar */
    box-sizing: border-box;
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
    width: 100%;
    height: calc(100% - 40px); /* Mengurangi padding atas dan bawah dari container */
    overflow-y: auto; /* Memungkinkan scroll vertikal pada container */
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
    <div class="main-content">
        <div class="container">
            <h1>Masukan Judul</h1>
            <form enctype="multipart/form-data" method="post" action="input.php">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" id="textarea"></textarea>
                </div>
                <div class="form-group">
                    <label for="pengumpulan">Pengumpulan</label>
                    <textarea name="pengumpulan" class="form-control" rows="3" id="textarea"></textarea>
                </div>
                <div class="form-buttons">
                    <button href="../lowongankerja.php" type="reset" class="btn btn-reset">Hapus</button>
                    <button type="submit" class="btn btn-submit">Terbitkan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>