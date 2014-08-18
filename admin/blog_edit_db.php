<?
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	mysql_query("update blog set blogsubject='$subject', blogtext='$text' where blogid='$id'");

	header("location: ./blog.php?msg=Blog Edited");
?>