<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	mysql_query("update student set studsurname='$sname', studfirstname='$fname', studlastname='$lname', studsemester='$sem' where studid=$id");
	
	header("location: ./profile.php?msg=Student Profile Successfully Edited");
?>