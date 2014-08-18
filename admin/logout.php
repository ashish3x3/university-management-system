<?
	session_start();
	include("./function.php");
	include("./config.php");	
	$user=$_SESSION['cuser'];
	logout_log($user);
	$_SESSION['cuser']="";
	$_SESSION['role']="";
	session_destroy();
	header("location: ./index.php");
?>