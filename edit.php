<?php
include('db.php');
$eid = $_GET['eid'];

  $sql = mysqli_query($conn, "select * from post where id = $eid ");

  while($row=mysqli_fetch_assoc($sql))
  {

      $title = $row['title'];
      $discription = $row['discription'];
      $additional = $row['additional'];
      $category = $row['category'];
      $price = $row['price'];
      $image = $row['image'];
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
  



   
    <div class="alert btn-dark col-md-8 container"  role="alert">
      <center><h1>Write a Update </h1></center>


      <form method="POST" action="update.php?eeid=<?php echo $eid ?>"  enctype="multipart/form-data">
        <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="Title" value="<?php echo $title ?>" required>
  </div>

  <div class="form-group">
   <label>Discription</label>
   <textarea name="discription" class="form-control" rows="8" value="<?php echo $discription ?>" required>
   </textarea>
 </div>
 <div class="form-group">
  <label>Additional</label>
  <textarea name="additional" class="form-control" rows="5" value="<?php echo $additional ?>" required></textarea>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1"  required>
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
<input name="price" type="text" class="form-control" placeholder="Price" value="<?php echo $price ?>" required>
</div>

 <div class="form-group">
    <label for="exampleFormControlFile1">Previes Image:</label>
    <br>
    <img src="img/<?php echo $image ?>">
  </div>

 <div class="form-group">
    <label for="exampleFormControlFile1"> New Image:</label>
    <br>
    <input type="hidden" name="size" value="1000000">
    <input type="file" name="image">
  </div>
  <center><button class="btn btn-outline-primary" type="submit" name="update">UPDATE</button></center>
      </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


