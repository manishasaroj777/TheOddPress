<?php
session_start();
include("connect.php");
$un = mysqli_real_escape_string($con,$_POST['un']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sql = "select roleid,username,password from login";
$query = mysqli_query($con,$sql);



$flag=0;
$roleid="";

while($row = mysqli_fetch_array($query))
{ 
  if($un==$row[1] && $pass==$row[2])
  {
    $flag=1;
    $roleid = $row[0];
    break;
  }
}

if($flag==1)
{
      $_SESSION['roleid']=$roleid;
      $_SESSION['uName']=$un;
      $_SESSION['pass']=$pass;
     
      header("Location:index.php");
 } 
else
   {
    echo "Enter correct username or password";
    
   }



?>