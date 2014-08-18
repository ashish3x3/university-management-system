<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from staff where staffid=$id");
	header("location: ./staff.php?msg=Staff Deleted");
?>