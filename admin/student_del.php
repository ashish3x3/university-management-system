<?
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from student where studid=$id");
	header("location: ./student.php?msg=Student Deleted");
?>