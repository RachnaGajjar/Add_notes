<?php
function get_connection()
{
	$con=pg_connect("host=localhost port=5050 dbname=add_list");
	return $con;

}

function get_notes()
{
	$sql = "select * from notescontent where userid=".$_SESSION['id'];
	$con=get_connection();
	$quary = pg_query($con, $sql);
	return $quary;	
}
function insert_note($note)
{
	$id=$_SESSION['id'];
	$quary="insert into notescontent (notes,userid) values ('$note','$id')";
	$con=get_connection();
	$result=pg_query($con,$quary);
	return $result;
}
function update_note($data)
{
	$ida=$_GET['iddata'];
	$idupdate=$_GET['iddata'];
	$quary="update set notescontent id=$ida,notes=$data where id=$idupdate";
	$con=get_connection();
	$result=pg_query($con,$quary);
	return $result;
}
function delete_note()
{
	$ida=$_GET['iddata'];
	$query="DELETE FROM `notescontent` WHERE id=$ida";
	$con=get_connection();
	pg_query($con, $query);
	return $result;
}

?>