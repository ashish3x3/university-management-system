<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from blog where blogid=$id");
	header("location: ./blog.php?msg=blog Deleted");
?>