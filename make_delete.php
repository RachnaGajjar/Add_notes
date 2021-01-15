<?php
include 'database.php';
$con=get_connection();
$result=delete_note();
header('location:display.php');?>
