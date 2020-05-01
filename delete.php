<?php 

include('db.php');

		$eid=$_GET['eid'];

		$q = "delete from post where id='".$eid."'";
		$result=mysqli_query($conn, $q);

		if($result)
		{
			echo '<script>alert("Data Successfully Deleted");</script>';
			header("location:foodlist.php");
    		
		}
		else
		{
			echo '<script>alert("error Occured");</script>';
		}

	
/*	else
	{
		header("location:foodlist.php");
	}
*/

 ?>




