<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from logtable");
	header("location: ./log.php?msg=Log Cleared");
?>