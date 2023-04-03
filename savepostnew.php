<?php
session_start();
if(isset($_POST['btn1']))
{
	include("connect.php");
	
	 if(isset($_SESSION['roleid']))
	  {
	   $title=$_POST['tit'];      
	   $short=$_POST['short']; 
	   $desc=$_POST['desc'];
	   $category=$_POST['category'];             
      $dt= date("j F Y,\a\\t g.i.a",time());

 
 
	   
		$fileName = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
		$fileSize = $_FILES['file']['size'];
		$file_temp_loc = $_FILES['file']['tmp_name'];

		//echo  "$title,$short,$desc,$category,$dt,$fileName" ;

		 if($fileType=="image/jpg" || $fileType=="image/jpeg" || $fileType=="image/png")
		 {
		  if($category==1)
		  {
		  	$file_store="img/trending/".$fileName;
		  } 	
		  if($category==2)
		  {
		  	$file_store="img/word/".$fileName;
		  } 
		  if($category==3)
		  {
		  	$file_store="img/fit-life/".$fileName;
		  }
		  if($category==4)
		  {
		  	$file_store="img/Entertainment/".$fileName;
		  }
		  if($category==5)
		  {
		  	$file_store="img/Sports/".$fileName;
		  } 
		  if($category==6)
		  {
		  	$file_store="img/Odd-blog/".$fileName;
		  }  	
		  if($category==7)
		  {
		  	$file_store="img/top/".$fileName;
		  }  	 
		 
	    move_uploaded_file($file_temp_loc,$file_store);
		//echo "File Uploaded..";
	    $sql="insert into postnews(title,shortdis,description,image,date,sid) values('$title','$short','$desc','$file_store','$dt',$category)";
           $query=mysqli_query($con,$sql);
           echo "News posted<br>";
           echo "<a href='index.php'>GO BACK</a>";

	    }   
	     else
         {
          echo "news does not posted";
        }
     }	
 }
          
?>