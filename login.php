<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      body{
        background-image: url("login.jpg");
        background-repeat: no-repeat;
      background-attachment: fixed;
  background-position: center;
   background-size: 100% 100%;
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
  <body>
<!-- <div style="padding: 50px 150px 300px 550px">

<div class="card text-white bg-dark mb-5" style="max-width: 22rem; max-height: 40rem;  opacity: 0.8;">
 <div class="card-header"><h4><b>Login</b></h4></div>
  <div class="card-body">
    <form method="POST" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" required="required">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required="required">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary " name="btn">Submit</button>
</form>
  </div>
</div>
</div>
 -->


</body>




<!-- <?php

include('db.php');

if(isset($_POST['btn']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  
  $sql = mysqli_query($conn,"SELECT * FROM login WHERE user='".$user."' AND pass='".$pass."'");
  $data = mysqli_num_rows($sql);
  
  if($data==1)
  {
      header('location:admin.php');
  }
  else{
   echo '<script>alert("Data Successfully entered");</script>';
}



}
else
{
   echo '<script>alert("ERROR");</script>';
  header('location:login.php');
}




?> -->











        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../bs/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

