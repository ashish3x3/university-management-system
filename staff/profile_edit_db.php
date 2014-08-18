<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	$id=$_POST['id'];
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$img=$_POST['img'];
	$hobby=$_POST['hobbies'];
	$qualification=$_POST['qualification'];
	$certification=$_POST['certification'];
	$experience=$_POST['experience'];
 	//Image Upload
	$uploaddir = '../img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	$fpath=$_FILES['userfile']['name'];
	if($fpath=="")
	{
		$fpath=$img;
	}
	if($img=="")
	{
		$img="default.gif";
	}
	mysql_query("update staff set staffsurname='$sname', stafffirstname='$fname', stafflastname='$lname', staffemail='$email', staffqualification='$qualification', staffcertification='$certification', staffexperience='$experience', staffimg='$fpath', staffhobby='$hobby' where staffid=$id"); 
	
	header("location: ./profile.php?msg=Profile Successfully Edited");
?>