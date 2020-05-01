<?php  
  session_start();
  session_unset();
 ?>


<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      .ad1{
        text-decoration: none;
        color: white;
      }
      .ad1:hover{
        text-decoration: none;
        color:  #808080;
      }
      .log{
         text-decoration: none;
      }
    </style>




    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bs/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="custom.css">
    <title>H4CK3R CAFE</title>
  </head>
  <body style="background-color: black">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h4 class="navbar-brand" style="color: WHITE">H4CK3R CAFE</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    &nbsp;&nbsp;
    <div class="navbar-nav navbar-expand-lg">
      <a class="ad1 nav-item btn btn-outline-primary"  href="admin.php"> Tables<span class="sr-only">(current)</span></a>
    </div>
     &nbsp;&nbsp;
    <div class="navbar-nav navbar-expand-lg">
      <a class="ad1 nav-item btn btn-outline-primary"  href="foodlist.php">Food List <span class="sr-only">(current)</span></a>
    </div>
    &nbsp;&nbsp;
    <div class="navbar-nav navbar-expand-lg">
      <a class="ad1 nav-item btn btn-outline-primary"  href="post.php"> Add Food Menu <span class="sr-only">(current)</span></a>
    </div>

     &nbsp;&nbsp;
    <div class="navbar-nav navbar-expand-lg">
      <a class="ad1 nav-item btn btn-outline-primary"  href="offer.php"> Add Offers img <span class="sr-only">(current)</span></a>
    </div>

    <div>
      <a  style="color: white; padding-left: 400%; font-size: 120%"> Admin</a>

    </div>
  </div>

    <div><a class="btn btn-outline-danger" href="logout.php" style="color: white; text-decoration: none;">  Log-out</a>

    </div>
  </div>
</nav>
<br>

 <div class="navbar-nav navbar-expand-lg " style="padding-left: 450px">
      <a class="ad1 nav-item btn btn-outline-warning"  href="index.php"> Costumer View <span class="sr-only">(current)</span></a>
    </div>


<!-- 
<nav class="navbar navbar-expand-lg bg-dark">
  <h3 style="color: WHITE">H4CK3R CAFE</h3>
  <a href="foodlist.php"><h6 class="text-white h6">&nbsp;&nbsp;&nbsp;Food List </h6></a>
  <h5 style="color: RED;">Admin</h5>
</nav> 
 -->











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>