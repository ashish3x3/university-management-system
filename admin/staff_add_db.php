<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['designation'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$role=$_POST['role'];
	mysql_query("insert into staff (staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid,staffpassword,staffrole,staffimg) values('$sname','$fname','$lname','$designation','$login','$pass','$role','default.gif')");
	header("location: ./staff.php?msg=staff Added");
?>