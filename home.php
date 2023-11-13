<?php
   session_start();
   if(isset($_POST['search'])) {
      $searchq = $_POST['search'];
      }
   if(isset($_POST['SF'])) {
      $searchq = $_POST['SF'];
     }
     if(isset($_POST['AC'])) {
      $searchq = $_POST['AC'];
     }
     if(isset($_POST['MB'])) {
      $searchq = $_POST['MB'];
     }
     if(isset($_POST['ME'])) {
      $searchq = $_POST['ME'];
     }
?>
<!DOCTYPE html>
<html>
<head>
   <title>PHP & MongoDB - CRUD Operation Tutorials - ItSolutionStuff.com</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   <style>
      <?php include "style.css" 
      
      ?>
   </style>
</head>
<body>



<header class="header">
    <a href="#home" class="logo">
        <img src="logo1.png" alt="">
    </a>

    <nav class="nav">
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="index.php">Restaurants</a></li>
        <li><a href="#review">Reviews</a></li>
      </ul>
    </nav>


    <div class="menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    
</header>

<section class="home" id="home">

    <div class="home-content">
      <h2>Town's Finest</h2>
      <h3>Discover Greatness</h3>
      <p>Best Places in Town</p>
      <a href="index.php" class="order-btn">Find Now</a>
    </div>
    
  </section>

  <section class="about" id="about">
    <h1 class="headings">About Us</h1>

    <div class="line">
      <div class="about-content">
        <h2>What is Delicious All About?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
      </div> 
      <div class="about-img">
        <img src="about-img2.jpg" class="abt-img" alt="">
        <img src="about-img.jpg" class="abt-img" alt="">
      </div>
    </div>

  </section>




</body>
</html>