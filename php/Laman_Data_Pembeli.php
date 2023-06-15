<!DOCTYPE html>
<html>
  <head>
    <title>Contact form</title>
    <link rel="stylesheet" href="./css/Laman_Data_Pembelian.css">
    <link rel="stylesheet" href="./css/mainStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="logo">
          <a href="index.html"><img src="banner_ngalebeut.png" alt="NGALEBEUT Logo"></a>
        </div>
      </div>
      <nav>
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="cart.html">Cart</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Sign Up</a></li>
        </ul>
      </nav>
    </header>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form action="./Metode_Pembayaran.html">
        <h1>Please Input Your Personal Information </h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full Name">
          <input type="text" name="name" placeholder="Phone Number">
          <input type="text" name="name" placeholder="Address">
        </div>
        <p>Additional notes</p>
        <div>
          <textarea rows="4"></textarea>
        </div>
        <button class="submit-button">Submit</button>
      </form>
    </div>
  </body>
</html>