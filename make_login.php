<?php
session_start();
//header('location:index.php');
include 'database.php';
$con=get_connection();
$Email=$_POST['email'];
$Password=$_POST['password'];
$query="select * from userdetail where email='$Email' && password='$Password'";
$result=pg_query($con,$query);
$row=pg_fetch_assoc($result);
if($row)
{
 	$_SESSION['username']=$Email;
 	$_SESSION['id']=$row['id'];
	header('location:form.php');
}
 else
 	{
	 	header('location:login.php');
	}
?>