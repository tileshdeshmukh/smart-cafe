
<?php
  
include('db.php');
  
    $tit = $_GET['t'];

?>
<!doctype html>
<html lang="en">



  <head>


<style type="text/css">


      
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
//-------------------------------------------------------------			


  
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
  
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<script> 
	
	 console.log(ck_string);
	
	</script>
  </div>

</div>
   
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
    <form method="GET" action="search.php" class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" name="tit" placeholder="Search" aria-label="Search">
     <a href="search.php?t=<?php echo $tit ?>"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="src">Search</button></a>

    </form>
    </div>
    </nav>
</div>  



<?php
  
include('db.php');
  


    $query = mysqli_query($conn,"SELECT * FROM post WHERE title='".$tit."'");

    while($row = mysqli_fetch_array($query)){
?>
  
<form method="" action="search.php">
<div class="row" style="padding: 00px 70px 70px 70px">


   <table style="width: 100%" name="myt">
        <div style="padding: 00px 100px 20px 100px">
                  <tr style="background-color: #262626">
          
            <td> 
              
                <img src="img/<?php echo $row['image'] ?>"  alt="image" style="width: 200px; height: 100px; padding-left: 15px;">
            </td>
            <td style="width: 65%; color: white">
            
                <h5 class="title"> <!-- &nbsp;&nbsp; --><p style="width: : 50%"> <?php echo $row['title']; ?> </p> </h5>
            </td> 
              <td style="width: 20%; color: white">
              
                  <h6 class="price"> Rs.<?php echo $row['price']; ?>/- </h6> <br>
            </td>
            <td> 

               <h6 style="color: white;"> Countity</h6>
             </td>
              <td style="padding-right: 40px">
                <input type="number" id="cou" class="form-control mx-sm-3"  placeholder="1"  required>
            </td>

            <td style="color: white">
       
             <div class="custom-control custom-switch">

                  <input type="checkbox" class="custom-control-input" id='customSwitch[<?php echo $ind;?>'  name='customSwitch' value='<?php echo $row[title];?>'>

                  <label class="custom-control-label" for="customSwitch[<?php echo $ind;?>]"></label>
              </div>
             
            
            </td>
              
        </tr>

      </div>
    </table>
   



</form> 
<form class="form-inline">
  <div class="form-group" style="padding-top: 30px; padding-left: 450px;">
    <label style="color: white">Table Number:</label>
    <input type="number" id="inputPassword6" class="form-control mx-sm-3" placeholder="Number" required>
  </div>
</form> 


</div>

<div style="padding-left: 50px; padding-bottom: 10px;">
<table>
<tr>
  <td style="width: 60%">
<button type="button" onclick="CheckAll()" id="myBtn" class="btn btn-primary" value="check">Check Order</button>
 </td>
 <td style="width: 9%">
  <button style="" type="button" class="btn btn-primary" name="ord">Place Order</button>
    </td></tr></table>
</div>


 <?php 

   }

   ?>








<!-- Footer con -->
<div style="padding-top: 1%">
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
