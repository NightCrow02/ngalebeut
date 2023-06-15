<?php

    include 'config.php';

    if(isset($_POST["submit"])) {
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $passphase = mysqli_real_escape_string($conn, $_POST['passphase']);

		$select_users = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email' AND passphase = '$passphase'") or die('query failed');

		if(mysqli_num_rows($select_users) > 0){
			$message[] = 'user already exist!';
		}else{
			mysqli_query($conn, "INSERT INTO `customer`(userName, email, passphase) VALUES('$userName', '$email', '$passphase')") or die('query failed');
			$message[] = 'registered successfully!';
			header('location:login.php');
		}

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ngalebeut -  Hiji Web Sakluarga</title>
  <link rel="stylesheet" href="./css/registerStyle.css">
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
					<input class="button" type="submit" name="submit" value="Sign up">
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="passphase" placeholder="Password" required="">
					<button name="submit">Login</button>
				</form>
			</div>
	</div>
</div>
</body>
</html>