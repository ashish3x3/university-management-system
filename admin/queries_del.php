<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from query where queryid=$id");
	header("location: ./queries.php?msg=Query Deleted");
?>