<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bs/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="custom.css">
    <title>H4CK3R CAFE</title>
  </head>
  <body style="background-color: black">

<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><h5>H4CK3R CAFE</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
        <a class="nav-link" href="index.php"><h6 class="nev">Home </h6><span class="sr-only">(current)</span></a>
      </li> 
   


    </ul>
    <form method="POST" action="search.php" class="form-inline my-2 my-lg-0">
      <?php
      if(isset($_POST['se'])) {
        
      
      $tit=$_POST['tit'];


      }
      ?>

  <input class="form-control mr-sm-2" type="search" name="tit" placeholder="Search" aria-label="Search">
     
     <a href="search.php?t=<?php $tit ?> "> <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="se" >Search
     </button></a>

    </form>
    </div>
    </nav>
</div>  



<center><h2 style="color: white">Best Offers</h2></center>

 
 <marquee style="color: blue"><b>Best Offer Title Insert In This Place</b></marquee>


<?php
include('db.php');
$sql = mysqli_query($conn,"SELECT * FROM offer_img ");
while ($r=mysqli_fetch_array($sql)) {

?>


<!-- Create carousel -->\

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="img/<?php echo $r['name'] ?>" class="d-block " alt="..." style="height: 300px; width: 950px; padding-left: 50px;">

      <h6 style="padding-left: 50px; color: white" ><?php echo $r['title'] ?> :</h6>
      <p style="font-family: Times New Roman;padding-left: 50px; padding-right: 50px; color: white" > <?php echo $r['discription'] ?></p>
    </div>
   
  </div>


</div>




<?php
}
?>
<br><br><br><br>
<div style="padding: 0% 3% 0% 3%">
<div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
  <div class="card-header">Footer</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div></div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
