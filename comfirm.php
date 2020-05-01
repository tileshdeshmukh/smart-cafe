<?php
include('db.php');

$eid=$_GET['eid'];



   
	
 

?>





 <!doctype html>
<html lang="en">
  <head>
 <!--    Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Bootstrap CSS  -->
    <link rel="stylesheet" href="../bs/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="custom.css">
    <title>H4CK3R CAFE</title>
  </head>
  <body style="background-color: black; padding: 100px; padding-left: 20%; padding-right: 20%">
 



<div class="card" style="">
  <h5 class="card-header btn-outline-dark">Comfirm</h5>
  <div class="card-body btn-dark">
    <h5 class="card-title">Do You Want To Delete ?</h5>
    <p class="card-text">Yes :Press ok <br> NO :Press Cancle</p>
    <a href="foodlist.php" class="btn btn-outline-primary">Cancle</a>
    <a href="delete.php?eid=<?php echo $eid ?>" class="btn btn-outline-danger">Ok</a>
  </div>
</div>











    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>