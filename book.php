<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travela|Book Now</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="header">
  <a href="index.html" class="logo">Travela</a>
  <nav class="navbar">
    <a href="index.html">home</a>
    <a href="about.html">about</a>
    <a href="package.html">package</a>
    <a href="book.html"><span style="color: violet;">book now</span></a>
    
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background: url() no-repeat;">
  <h1>book now</h1>
</div>
  
<section class="booking">
  <h1 class="heading-title">Book your trip
  </h1>
  <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
      <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="Enter your name" name="name">
      </div>
      <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="Enter your email" name="email">
      </div>
      <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="Enter your number" name="phone">
      </div>
      <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="Enter your address" name="address">
      </div>
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="Place you want to visit" name="location">
      </div>
      <div class="inputBox">
        <span>how many :</span>
        <input type="text" placeholder="Enter no of guests" name="guests">
      </div>
      <div class="inputBox">
        <span>arrival :</span>
        <input type="date" name="arrival">
      </div>
      <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">
      </div>
      
    </div>
    <input type="submit" value="submit" class="btn" name="send">
  </form>
</section>

  



<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Links</h3>
      <a href="index.html"><i class="fas fa-angle-right"></i> home</a>
      <a href="about.html"><i class="fas fa-angle-right"></i> about</a>
      <a href="package.html"><i class="fas fa-angle-right"></i> package</a>
      <a href="book.php"><i class="fas fa-angle-right"></i> book now</a>
    </div>
    <div class="box">
      <h3>Other links</h3>
      <a href="#"><i class="fas fa-angle-right"></i> FAQS</a>
      <a href="#about-us"><i class="fas fa-angle-right"></i> about us</a>
      <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
      <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
      <h3>contact us</h3>
      <a href="#"><i class="fas fa-phone"></i>+91-853-482-4023</a>
      <a href="#"><i class="fas fa-phone"></i>+91-817-112-6856</a>
      <a href="#"><i class="fas fa-envelope"></i>Travelaaa@gmail.com</a>
    </div>
    <div class="box">
      <h3>follow us</h3>
      <a href="#"><i class="fab fa-facebook"></i>facebook</a>
      <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
      <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
    </div>
  </div>
  <div class="credit">created by <span>Devansh Sah</span>|all rights reserved</div>
</section>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="js/scrpit.js"></script>
</body>
</html>