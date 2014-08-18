<?
	include("./config.php");
	include("./function.php");
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	$login=$_POST['login'];
	$student=get_studname($login);
	$dt=date("d/m/Y");
	mysql_query("insert into blog (blogsubject,blogdate,blogtext,loginid,blogvisit) values('$subject','$dt','$text','$login',0)");

	header("location: ./blog.php?msg=Query Added");
?>