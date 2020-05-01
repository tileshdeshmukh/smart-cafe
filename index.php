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
        <a class="nav-link" href="index.php"><h6 class="nev">Home </h6><span class="sr-only">(current)</span></a>
      </li> 
    <li class="nav-item active">
        <a class="nav-link" href="offershow.php"> <h6 class="nev">  offer </h6><span class="sr-only">(current)</span></a>
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
</div>

</div>









<!-- <marquee style="color: white"> CREATED BY DAMINI, SAYlI, SHWETA, T!LESH </marquee>
-->
<!-- show post data -->
  
<form action="/index.php">
<div class="row" style="padding: 00px 70px 70px 70px">

  <?php
    include('db.php');
    $query = mysqli_query($conn,"select * from post ORDER BY id ASC");
    $ind = 0;
$title_f = array();
$price_f = array();

    while($row = mysqli_fetch_array($query)){
		    $title_f[] = $row['title'];
			$price_f[] = $row['price'];


?> 
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

                  <input type="checkbox" class="custom-control-input" id='customSwitch[<?php echo $ind;?>]'  name='customSwitch' value='<?php echo $row['title'];?>'>

                  <label class="custom-control-label" for="customSwitch[<?php echo $ind;?>]"></label>
              </div>
             
            
            </td>
              
        </tr>

      </div>
    </table>
   
 <?php 
$ind++;
   }

   ?>


</form> 
<form class="form-inline">
  <div class="form-group" style="padding-top: 30px; padding-left: 500px;">
    <label style="color: white">Table Number:</label>
    <input type="number" id="inputPassword6" class="form-control mx-sm-3" placeholder="Number" required>
  </div>
</form> 


</div>

<div style="padding-left: 50px; padding-bottom: 10px;">
<table>
<tr>
  <td style="width: 60%">
<button type="button" onclick="CheckAll()" id="myBtn" class="btn btn-primary" value="check" name="ch">Check Order</button>
 </td>
 <td style="width: 9%">
  <button style="" type="button" class="btn btn-primary" name="ord">Place Order</button>
    </td></tr></table>
</div>


<script type="text/javascript" language="javascript">
	
  
  function CheckAll(){

      var name = document.forms[0];
      var price = document.forms[0];
      var txt = "";
      
      for (var i = 0; i < name.length; i++) {
        
          if(name[i].checked){

            txt = txt + name[i].value + "";
          }
      }
	  

	  
      alert( document.getElementById("order").value = "you ordered" + txt );
  }
  
  //-----------------------
  
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
	

	
	//var checkBoxes = document.getElementsByTagName('customSwitch').checked;
			var ck_string = "";
      var c =1;
            $.each($("input[name='customSwitch']:checked"), function(){  
                ck_string +="\n"+ c +" " +$(this).val(); 
                c +=1;  
            });
            if (ck_string ){
				ck_string =ck_string.substring(1);
				var dss =  "Your want to order:";
            dss += "\n-------------------------------------";
					dss += "\n"+ ck_string;
            alert(dss);
            }else{
                alert('Please choose atleast one value.');
            }
			
			 
			

  	
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
  
  //----------------------------
  
  <?php
  include('db.php');
    if(isset($_POST["ord"]))
    {
      if(!empty($_POST["customSwitch"])){
        foreach ($_POST["customSwitch"] as $ckeck) {
          $s=implode('',$ckeck);
          $q = mysqli_query($conn,"select * from post where title='$s'");
          while ($r = mysqli_fetch_array($q)) {
            $t = $r['title'];
            $p = $r['price'];

            $qu = mysqli_query($conn,"insert into order(title, price) values('$t',$p)");

          }
            $qu = mysqli_query($conn,"insert into oder(title, price) values('$t',$p)");
        }
      }
    }
?>
</script>














<br><br><br><br><br><br>
<br><br><br><br><br><br>

<!-- Footer con -->
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
