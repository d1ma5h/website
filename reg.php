<?php
$db=mysqli_connect('localhost','2020_dimash','lomonosov1985','2020_dimash') or
die('Error connecting to MySQL server.');

$name=$_POST['name'];
 $email=$_POST['email'];
 $password1=$_POST['password1'];
 $password2=$_POST['password2'];
 
 $query="INSERT INTO users VALUES(null,'".$name."','".$email."','".$password1."')";
 $result = mysqli_query($db,$query);
 
if ($result=='TRUE')
{	
include("index.html");
echo  "<script type='text/javascript'>alert('You have successfully registered');</script>";
 }
 else 
{	echo "Error";	}
?>