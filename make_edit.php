<?php
include 'database.php';
$con=get_connection();
$ida=$_GET['iddata'];
$show=get_notes();
$usedata=pg_query($con, $show);
$arry=pg_fetch_array($usedata);
if(isset($_POST['submit']))
{
    $data=$_POST['notes'];
    $result=update_note($data);
}
header('location:display.php');