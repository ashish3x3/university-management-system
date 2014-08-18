<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	$id=$_GET['id'];
	mysql_query("delete from questionbank where queid=$id");
	header("location: ./exam.php?msg=Question Deleted");
?>