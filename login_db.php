<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	session_start();
	ob_start();
	include("./config.php");
	include("./function.php");
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$category=$_POST['category'];
	if($category=="student")
	{
		$result=mysql_query("select * from student where studloginid='$user'");
		$row=mysql_fetch_array($result);
		if($row['studpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
 			$_SESSION['sem']=$row['studsemester'];
			login_log($user);
			header("location: ./student/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
	else
	{
		$result=mysql_query("select * from staff where staffloginid='$user'");
		$row=mysql_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			chk_admin($user);
			login_log($user);
			header("location: ./staff/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
?>