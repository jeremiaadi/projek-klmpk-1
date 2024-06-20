<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header 2</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-top {                                               
            background-color: #f5f5f5;
            color: #750000;
            padding: 10px 0;
        }
        .header-top .cont {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-top .logo {
            display: flex;
            align-items: center;
        }
        .header-top .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .header-top .logo h1 {
            font-size: 24px;
            margin: 0;
            color: #750000;
        }
        .header-top .search-bar {
            display: flex;
            align-items: center;
        }
        .header-top .search-bar input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            width: 250px;
        }
        .header-top .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #750000;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        .header-top .search-bar button:hover {
            background-color: #900;
        }
        .nav-bar {
            background-color: #750000;
            color: #fff;
            padding: 15px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-bar .container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .nav-bar nav {
            display: flex; 
            align-items: center;
        }
        .nav-bar nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            position: relative;
        }
        .nav-bar nav a:hover {
            text-decoration: underline;
        }

        .nav-bar nav.active {
            display: flex;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
        .close-btn {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header-top">
        <div class="cont">
            <div class="logo">
                <img src="assets/logo.png" alt="Berakar Logo">
                <h1>Berakar</h1>
            </div>
            <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search">
            <button id="searchButton">Search</button>
            </div>
        </div>
    </div>
    <div class="nav-bar">
        <div class="cont">
            <nav>
                <a href="index.php">Beranda</a>
                <a href="karir.php">Karir</a>
                <a href="beasiswa.php">Beasiswa</a>
            </nav>
        </div>
    </div>

    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            var searchValue = document.getElementById('searchInput').value.toLowerCase();
            var items = document.querySelectorAll('.item');
            
            items.forEach(function(item) {
                if (item.textContent.toLowerCase().includes(searchValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>

</body>
</html>
