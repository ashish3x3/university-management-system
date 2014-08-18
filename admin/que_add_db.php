<?
	include("./config.php");
	include("./function.php");
	$subject=$_POST['sub'];
	$text=$_POST['que_text'];
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	$ans=$_POST['ans'];
	mysql_query("insert into questionbank (quesubject,quetext,queans1,queans2,queans3,queans4,queansfinal) values('$subject','$text','$ans1','$ans2','$ans3','$ans4','$ans')");

	header("location: ./exam.php?msg=Question Added&subject=$subject");
?>