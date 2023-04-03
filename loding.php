<?php
 class loding
 {
	  function loadcategory()
	   {
	 	include("connect.php");
	 	$sql = "select * from categories";
	 	$query = mysqli_query($con,$sql);
	 	if(mysqli_num_rows($query) > 0)
	 	{
	 		while($row = mysqli_fetch_array($query))
	 		{
	 			echo "<option value=$row[0]>$row[1]</option>";
	 		}
	 	}
	  }    

	 
}
 $e = new loding();
 //$e->loadSecurityQuestion();
?>