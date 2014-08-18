<?
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$subject=$_POST['sub'];
	$text=$_POST['que_text'];
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	$ans=$_POST['ans'];
	mysql_query("update questionbank set quesubject='$subject', quetext='$text', queans1='$ans1', queans2='$ans2', queans3='$ans3', queans4='$ans4', queansfinal='$ans' where queid='$id'");

	header("location: ./exam.php?msg=Question Edited&subject=$subject");
?>