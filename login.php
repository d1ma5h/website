<?php
$db=mysqli_connect('localhost','2020_dimash','lomonosov1985','2020_dimash') or
die('Error connecting to MySQL server.');
$email = $_POST['email'];
$password1 = $_POST['password1'];

$query = "SELECT * FROM 2020_dimash.users WHERE email = '".$email."'";
$result = mysqli_query ($db, $query);

$myrow = mysqli_fetch_array($result);

if (!empty($myrow['email']))
{
	if ($password1 == $myrow['password1'])
	{
		include("index.html");
echo  "<script type='text/javascript'>alert('You are welcome');</script>";
		
	}
	else
	{
		echo "Password error!";
	}
}
else
{
	echo "Email error!";
}
?>