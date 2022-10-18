<?php
session_start();
$db=mysqli_connect('localhost','2020_dimash','lomonosov1985','2020_dimash') or die("Could not connect to db");
$name=$_POST["name"];
$email=$_POST["email"];
$password1=$_POST["password1"];
$password2=$_POST["password2"];
$user_check_query="SELECT * from users WHERE name='$name' or email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);

$password=md5($password1);

$query="INSERT into users(name,email,password) VALUES('$name','$email','$password')";
$mysqli_query($db,$query);
$_SESSION['name']=$name;
header('location: index.html');

?>