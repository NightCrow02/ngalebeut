<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ngalebeut -  Hiji Web Sakluarga</title>
  <link rel="stylesheet" href="./css/mainStyle.css">
</head>
<body>
  <!-- Header section -->
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
      </ul>
    </nav>
  </header>
  <!-- commit -->
  <!-- Main content section -->
  <main>
    <h2>Featured Products</h2>
    <div class="cart">
      <h2>Shopping Cart</h2>
      <li>
        <span class="product-name">Product 1</span>
        <span class="product-price">$20.00</span>
        <span class="product-quantity">1</span>
      </li>
      <li>
        <span class="product-name">Product 2</span>
        <span class="product-price">$25.00</span>
        <span class="product-quantity">2</span>
      </li>
        
      <div class="cart-totals">
        <div class="subtotal">
          <span>Subtotal:</span>
          <span>$70.00</span>
        </div>
        <div class="shipping">
          <span>Shipping:</span>
          <span>$5.00</span>
        </div>
        <div class="tax">
          <span>Tax:</span>
          <span>$8.40</span>
        </div>
        <div class="total">
          <span>Total:</span>
          <span>$83.40</span>
        </div>
        <button class="checkout-button" onclick="redirectToPage()">Checkout</button>
        <script>
          function redirectToPage() {
            window.location.href = "Laman_Data_Pembeli.php";
          }
        </script>
      </div>
    </div>
  </main>
  
  <!-- Footer section -->
  <footer>
    <p>&copy; 2023 My Ecommerce Store</p>
    <a onclick="redirectToEmail()">ngaleubeut@gmail.com</a>
    <script>
      function redirectToEmail() {
        window.location.href = "https://www.youtube.com/watch?v=yPYZpwSpKmA";
      }
      </script>
    <p>@ngalebeut</p>
  </footer>
</body>
</html>
