<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <title>Login - Berakar</title>
</head>
<style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #ffffff;
        font-family: Arial, sans-serif;
      }
      .login-container {
        background-color: #f2f2f2;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      .logo-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
      }
      .logo-container img {
        width: 50px;
        height: auto;
        margin-right: 10px;
      }
      .logo-container h1 {
        font-size: 24px;
        color: #800000;
        margin: 0;
      }
      .login-container h2 {
        margin-bottom: 20px;
        color: #800000;
        font-size: medium;
      }
      .form-group {
        margin-bottom: 15px;
        text-align: left;
      }
      .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #800000;
      }
      .form-group input {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      .login-button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #800000;
        color: white;
        font-size: 16px;
        cursor: pointer;
      }
      .login-button:hover {
        background-color: #a50000;
      }
    </style>
<body>
	<div class="login-container">
		<div class="logo-container">
			<img src="../assets/logo.png" alt="Berakar Logo" />
			<h1>Berakar</h1>
		</div>
		<h2>Login</h2>
		<form action="login.php" method="post">
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="uname" placeholder="User Name"><br>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password"><br>
		</div>

		<button type="submit" class="login-button">Login</button>
		</form>
	</div>
</body>
</html>