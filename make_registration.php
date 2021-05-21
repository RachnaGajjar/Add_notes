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
$result=pg_query($con,"select * from userdetail where email='$Email'");
$num=pg_num_rows($result);
if($num==1)
{
	echo "username is already taken";
}
else
{
	pg_query($con,"insert into userdetail(email, password,retypepassword) values ('$Email','$Password','$Retypepassword')");
	$_SESSION['username']=$Email;
	header('location:login.php');
}


?>