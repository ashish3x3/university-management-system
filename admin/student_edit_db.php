<?
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	mysql_query("update student set studsurname='$sname', studfirstname='$fname', studlastname='$lname', studsemester='$sem', studloginid='$login', studpassword='$pass' where studid=$id");
	
	header("location: ./student.php?msg=Student Successfully Edited");
?>