<?php
include('db.php');
if(isset($_POST['btn']))
{
  $title = $_POST['title'];
  $discription = $_POST['discription'];
  $additional = $_POST['additional'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $image = $_FILES['image']['name'];
  $temp = $_FILES['image']['tmp_name'];

  move_uploaded_file($temp, "img/$image");

  $sql = mysqli_query($conn, "insert into post(title, discription,additional,category,price,image) values ('$title','$discription','$additional','$category','$price','$image')");

  if($sql == 1){
    echo '<script>alert("Data Successfully entered");</script>';
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">H4CK3R CAFE</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="#">My order<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
     <a class="nav-link" href="#">Offers <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 

    <br>
   
    <div class="alert alert-dark col-md-8 container"  role="alert">
      <center><h1>Write a Post</h1></center>
      <form method="POST" action=""  enctype="multipart/form-data">
        <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="Title" required>
  </div>
  <div class="form-group">
   <label>Discription</label>
   <textarea name="discription" class="form-control" rows="8" required></textarea>
 </div>
 <div class="form-group">
  <label>Additional</label>
  <textarea name="additional" class="form-control" rows="5" required></textarea>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1" required>
      <option> Fast  </option>
      <option> cooldrink  </option>
      <option> Soop  </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
      <option>   </option>
    
      </select>
  </div>
<div class="form-group">
<label>Price</label>
<input name="price" type="text" class="form-control" placeholder="Price" required>
</div>



 <div class="form-group">
    <label for="exampleFormControlFile1">Image:</label>
    <br>
    <input type="hidden" name="size" value="1000000" required="required">
    <input type="file" name="image" required="required">
  </div>
  <center><button class="btn btn-dark" type="submit" name="btn">POST</button></center>
      </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>






<!--

<div class="row">

  <?php
    include('db.php');
    $query = mysqli_query($conn,"select * from post");

    while($row = mysqli_fetch_array($query)){
?>
      <img class="img-tag" src="img/im2.jpg">
      <h6 class="title"> <?php echo $row['title']; ?> </h6>
      <h6 class="price"> <?php echo $row['price']; ?> </h6>
    
 <?php   }  ?>
-->

