<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	$login=$_POST['login'];
	$student=get_studname($login);
	$dt=date("d/m/Y");
	mysql_query("insert into blog (blogsubject,blogdate,blogtext,loginid,blogvisit) values('$subject','$dt','$text','$login',0)");

	header("location: ./blog.php?msg=Blog Added");
?>