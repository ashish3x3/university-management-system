<?
	include("./config.php");
	$id=$_POST['id'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$result=mysql_query("select studpassword from student where studloginid='$id'");
	$row=mysql_fetch_array($result);
	if($row['studpassword']==$opass and $id!=$npass)
	{
		mysql_query("update student set studpassword='$npass' where studloginid='$id'");
		header("location: ./profile.php?msg=Password Successfully Changed");		
	}
	else
	{
		header("location: ./profile.php?msg=Password Not Changed");		
	}
?>