<?php
session_start();
//header('location:index.html');
include 'database.php';
$con=get_connection();
$Email=$_POST['email'];
$Password=$_POST['password'];
$Retypepassword=$_POST['retypepassword'];
if($password!=$retypepassword)
{
	header('location:registration.php');
	exit();
}
$query="select * from userdetail where email='$Email'";		
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo "username is already taken";
}
else
{
	$reg="insert into userdetail(email, password,retypepassword) values ('$Email','$Password','$Retypepassword')";
	mysqli_query($con,$reg);
	header('location:form.php');
}


?>