<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        .footer {
            background-color: #333;
            color: white;
            padding: 40px 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .footer div {
            margin: 10px 20px;
        }
        .footer h3 {
            margin-bottom: 20px;
        }
        .footer p, .footer a {
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            display: block;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer-bottom {
            background-color: #a52a2a;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .footer-bottom p {
            background-color: #a42c2c;
            text-align: center;
            padding: 10px 0;
            color: #fff;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="footer">
    <div class="footer-company">
        <h3>Berakar</h3>
        <p>Pusat karir dan Beasiswa Pendidikan</p>
        <p>088747378869<br>Berakar@gmail.com</p>
    </div>
    <div class="footer-links">
        <h3>Categories</h3>
        <a href="beasiswa.php">Beasiswa</a>
        <a href="karir.php">Pusat Karir</a>
    </div>
</div>

<div class="footer-bottom">
   Kelompok 1 PTI 22 A ©Copyright 2024
</div>

</body>
</html>
