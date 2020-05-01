<?php
include('db.php');
if(isset($_POST['btn']))
{
  $title = $_POST['title'];
  $discription = $_POST['discription'];
  $image = $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];

  move_uploaded_file($temp, "img/$image");

  $sql = mysqli_query($conn, "insert into offer_img(title, discription, name) values ('$title','$discription','$image')");

  if($sql == 1){
    echo '<script>alert("Offer Successfully entered");</script>';
  }
  else{
    echo '<script>alert("error Occured");</script>';
  }
}
?>
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

    <div>
      <a  style="color: white; padding-left: 650%; font-size: 120%"> Admin</a>

    </div>
  </div>

    <div><a class="btn btn-outline-danger" href="logout.php" style="color: white; text-decoration: none;">  Log-out</a>

    </div>
  </div>
</nav>

    <br>
   
    <div class="alert alert btn-dark col-md-8 container" style="border: 5px blue" role="alert">
      <center><h2>Add Offer Image</h2></center>
      <form method="POST" action=""  enctype="multipart/form-data">
        <div class="form-group">



 <div class="form-group">
   
    <br>
     <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="Title" required>
  </div>
  <div class="form-group">
   <label>Discription</label>
   <textarea name="discription" class="form-control" rows="8" required></textarea>
 </div>
  <label for="exampleFormControlFile1">Add Offer Image:</label><br>
    <input type="hidden" name="size" value="1000000" required="required">
    <input type="file" name="image" required="required">
  </div>
  <center><button class="btn btn-outline-primary" type="submit" name="btn">ADD</button></center>
      </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>







