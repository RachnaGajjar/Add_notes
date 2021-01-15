<?php
session_start();
include 'database.php';

if(isset($_POST['submit']))
{
	$note=$_POST['notes'];
	$result=insert_note($note);
}
header('location:display.php');

?>