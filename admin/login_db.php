<?
	session_start();
	ob_start();
	include("./config.php");
	include("./function.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$category=$_POST['category'];
	$result=mysql_query("select * from staff where staffloginid='$user'");
	$row=mysql_fetch_array($result);
	if($row['staffpassword']==$pass and $row['staffrole']=='Admin')
	{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
			login_log($user);
			header("location: ./home.php");			
	}
	else
	{
			header("location: ./index.php");
	}
	
?>