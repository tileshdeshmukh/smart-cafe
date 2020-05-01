<?php  
	include('db.php');


if(isset($_POST['update']))
{

	 $newid = $_GET['eeid'];

  	 $title = $_POST['title'];
  	 $discription = $_POST['discription'];
 	 $additional = $_POST['additional'];
 	 $category = $_POST['category'];
 	 $price = $_POST['price'];
 	 $image = $_FILES['image']['name'];
 	 $temp = $_FILES['image']['tmp_name'];

 	 move_uploaded_file($temp, "img/$image");

 	 $result= "UPDATE post SET title='".$title."', discription='".$discription."', additional='".$additional."', category='".$category."', price='".$price."',image='".$image."' WHERE id='".$newid."'";

 	 $msql = mysqli_query($conn, $result);

 	 if($msql)
 	 {
    	echo '<script>alert("Data Successfully entered");</script>';
    	header("location:foodlist.php");
 	 }
  	 else
  	 {
   		 echo '<script>alert("error Occured");</script>';

 	 }
}
else
{

 	header("location:foodlist.php");
}


?>
