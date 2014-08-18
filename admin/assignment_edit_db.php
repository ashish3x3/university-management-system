<?
	include("./config.php");
	$id=$_POST['id'];
	$title=$_POST['title'];
	$text=$_POST['assign_text'];
	$login=$_POST['login'];
	$sem=$_POST['sem'];
	$dt=$_POST['txtDate'];
	mysql_query("update assignment set assigntitle='$title', assigndate='$dt', assigntext='$text', staffloginid='$login', studsemester='$sem' where assignid='$id'");

	header("location: ./assignment.php?msg=Assignment Edited");
?>