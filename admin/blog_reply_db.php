<?
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$login=$_POST['login'];
	$reply=$_POST['reply'];
	mysql_query("insert into blogreply values('$id', '$login', '$reply')");

	header("location: ./blog_detail.php?id=$id");
?>