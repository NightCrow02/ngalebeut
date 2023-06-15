<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ngalebeut -  Hiji Web Sakluarga</title>
  <link rel="stylesheet" href="./css/mainStyle.css">
  <link rel="stylesheet" href="./css/loginStyle.css">
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
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</div>
</body>
</html>