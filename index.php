<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      
  
th, td {

  padding: 10px;
  
  text-align: left;
}

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bs/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="custom.css">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: black">
   
<!-- Create nevbar -->
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><h5>H4CK3R CAFE</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
        <a class="nav-link" href="#"><h6 class="nev">Home </h6><span class="sr-only">(current)</span></a>
      </li> 
    <li class="nav-item active">
        <a class="nav-link" href="#"> <h6 class="nev">  offer </h6><span class="sr-only">(current)</span></a>
      </li> 


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </nav>
</div>


<!-- Create carousel -->
<div>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="padding: 20px 10px 00px 10px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/im1.jpg" class="d-block w-100" alt="First slide" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/im2.jpg" class="d-block w-100" alt="Second slide" style="height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/im3.jpg" class="d-block w-100" alt="Third slide" style="height: 500px; ">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div

</div>

<!-- <marquee style="color: white"> CREATED BY DAMINI, SAYlI, SHWETA, T!LESH </marquee>
-->
<!-- show post data -->
  

<div class="row" style="padding: 00px 70px 70px 70px">

  <?php
    include('db.php');
    $query = mysqli_query($conn,"select * from post");
    $ind = 0;

    while($row = mysqli_fetch_array($query)){

?> 
   <table style="width: 100%">
        <div style="padding: 00px 100px 20px 100px">
                  <tr style="background-color: #262626">
          
            <td> 
              
                <img src="img/<?php echo $row['image'] ?>"  alt="image" style="width: 200px; height: 100px; padding-left: 15px;">
            </td>
            <td style="width: 65%; color: white">
            
                <h5 class="title"> <?php echo $row['title']; ?> </h5>
            </td> 
              <td style="width: 20%; color: white">
              
                  <h6 class="price"> Rs.<?php echo $row['price']; ?>/- </h6> <br>
            </td>
            <td> 

            <!--    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                     <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                </select>  -->
               <h6 style="color: white;"> Countity</h6>
             </td>
              <td style="padding-right: 40px">
                <input type="number" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="0" required="required">
            </td>

            <td style="color: white">
       
             <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" name="customSwitch[]">
                  <label class="custom-control-label" for="customSwitch1"></label>
              </div>
             
            
            </td>
              
        </tr>

      </div>
    </table>
   
 <?php 
$ind++;
   }  ?>

 
<form class="form-inline">
  <div class="form-group" style="padding-top: 30px; padding-left: 450px;">
    <label for="inputPassword6" style="color: white">Table NO:</label>
    <input type="number" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Number" required="required">
  </div>
</form> 


</div>

<div style="padding-left: 50px; padding-bottom: 10px;">
<table>
<tr>
  <td style="width: 60%">
<button type="button" class="btn btn-primary">Check Order</button>
 </td>
 <td style="width: 9%">
  <button style="" type="button" class="btn btn-primary">Place Order</button>
    </td></tr></table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>