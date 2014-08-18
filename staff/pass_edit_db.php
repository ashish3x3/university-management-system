<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	$id=$_POST['id'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$result=mysql_query("select staffpassword from staff where staffloginid='$id'");
	$row=mysql_fetch_array($result);
	if($row['staffpassword']==$opass and $id!=$npass)
	{
		mysql_query("update staff set staffpassword='$npass' where staffloginid='$id'");
		header("location: ./profile.php?msg=Password Successfully Changed");		
	}
	else
	{
		header("location: ./profile.php?msg=Password Not Changed");		
	}
?>