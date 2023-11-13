<?php
   
      session_start();

      if(isset($_POST['search'])) {
      $searchq = $_POST['search'];
    
      }
   
   
?>
<!DOCTYPE html>
<html>
<head>
   <title>Delicious</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <li><a href="home.php">Home</a></li>
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

<section class="search-content">

   <div class="container">

   
   <a href="create.php" class="btn btn-success">Add Restaurant</a><br><br>

   <form action="search.php" method="post">
      <div class="searchbar">
         <input type="text" name="search" placeholder="Search Keyword" class="search_input">
         <button type="submit" name="Search" value="Filter" class="button">
            <i class="material-icons">search</i>
         </button>
      </div><br><br>
   </form>

   <form action="filter.php" method="post">
      <button type="submit" name = "SF" value="San Fernando" class="btn btn-success">San Fernando</button>
      <button type="submit" name = "AC" value="Angeles" class="btn btn-danger">Angeles City</button>
      <button type="submit" name = "MB" value="Mabalacat" class="btn btn-warning">Mabalacat</button>
      <button type="submit" name = "ME" value="Mexico" class="btn btn-info">Mexico</button>
   </form><br>

   <form action="top-rated.php" method="post">
   <button type="submit" name = "tRate" value="89" class="btn btn-info" style="background-color:yellow; color:black; border: 1px yellow; ">Top rated</button><br>
   </form><br>

      <table class="table table-borderd">
         <tr>
            <th>Name</th>
            <th>Cuisine</th>
            <th>Town</th>
            <th>Rating</th>
            <th></th>
            
         </tr>
         <?php


            require 'config.php';
            
            $books = $collection->aggregate([['$match' => ['$or' => [['name' => ['$regex' => "$searchq"]], ['cuisine' => ['$regex' => "$searchq"]]]]]]);

               foreach($books as $book) {
                  echo "<tr>";
                  echo "<td>".$book->name."</td>";
                  echo "<td>".$book->cuisine."</td>";
                  echo "<td>".$book->town."</td>";
                  echo "<td>".$book->rating."</td>";
                  echo "<td>";
                  echo "<a href='edit.php?id=".$book->_id."' class='btn btn-primary'>Edit</a>";
                  echo "<a href='delete.php?id=".$book->_id."' class='btn btn-danger'>Delete</a>";
                  echo "</td>";
                  echo "</tr>";
               };
         ?>
      </table>
   </div>

</section>




</body>
</html>