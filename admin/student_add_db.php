<?
	include("./config.php");
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	mysql_query("insert into student (studsurname,studfirstname,studlastname,studsemester,studloginid,studpassword) values('$sname','$fname','$lname','$sem','$login','$pass')");
	header("location: ./student.php?msg=Student Added");
?>