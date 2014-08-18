<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from assignment where assignid=$id");
	header("location: ./assignment.php?msg=Assignment Deleted");
?>