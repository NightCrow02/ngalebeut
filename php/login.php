<?php

    include 'config.php';
	session_start();

	if(isset($_POST['submit'])){

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$passphase = mysqli_real_escape_string($conn, sha1($_POST['passphase']));
	
		$select_users = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email' AND passphase = '$passphase'") or die('query failed');
		if(mysqli_num_rows($select_users) > 0){
	
			$row = mysqli_fetch_assoc($select_users);

			$_SESSION['customer_name'] = $row['userName'];
			$_SESSION['customer_email'] = $row['email'];
			$_SESSION['customer_id'] = $row['userId'];
			header('location:register.php');
	
		}else{
			$message[] = 'incorrect email or password!';
			header('location:cart.php');
		}
	
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ngalebeut -  Hiji Web Sakluarga</title>
	<link rel="stylesheet" href="./css/loginStyle.css">
	<link rel="stylesheet" href="./css/mainStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<script src="./script/script.js" defer></script>
</head>
<body>
<header>
	<div class="header-container">
		<div class="logo">
			<a href="index.php"><img src="banner_ngalebeut.png" alt="NGALEBEUT Logo"></a>
		</div>
	</div>
	<nav>
		<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="shop.php">Shop</a></li>
		<li><a href="cart.php">Cart</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="register.php">Sign Up</a></li>
		</ul>
	</nav>
</header>
<div class="yes">
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="userName" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="passphase" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="passphase" placeholder="Password" required="">
					<input class="button" type="submit" name="submit" value="Login">
				</form>
			</div>
	</div>
</div>
</body>
</html>