<?php
include('connect.php');
$user=$_POST['users'];
$name=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['pass'];
if (!$conn)
{
	echo "Not Connected";
}
else
{
	echo "Connected";
	$insert="INSERT INTO `register`( `users`, `name`, `email`, `password`) VALUES ('$user','$name','$email','$password')";
	if(mysqli_query($conn,$insert))
	{
		//header('location:login2.php');
	}
	else{
		echo "Error:";
	echo mysqli_error($conn);}
		 
}

?>