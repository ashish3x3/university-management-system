<?
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysql_query("select * from student where studid=$id");
	$row=mysql_fetch_array($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #990000}
-->
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><? echo $_SESSION['cuser']; ?> - <a href="./logout.php">Logout</a></strong></div></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td id="head">&nbsp;</td>
  </tr>
  <tr>
    <td id="menu"><? include("menu.php"); ?></td>
  </tr>
  <tr>
    <td id="mid" valign="top">
    <form id="form1" name="form1" method="post" action="./student_edit_db.php">
    	<input name="id" type="hidden" value="<?=$id; ?>" />
    <table width="900" height="277" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" id="head_txt2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt">Student Detail</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      
      <tr>
        <td width="459"><div align="right" class="style1">Student Surname : </div></td>
        <td width="201"><div align="left">
            <?=$row['studsurname']; ?>
          </div></td>
        <td width="240">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Firstname : </div></td>
        <td><div align="left">
          <?=$row['studfirstname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Lastname : </div></td>
        <td><div align="left">
          <?=$row['studlastname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Semester : </div></td>
        <td><div align="left">
			<?=$row['studsemester']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Student Loginid : </div></td>
        <td>
          <div align="left">
			<?=$row['studloginid']; ?>
            </div>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label></label>
          <label>
          <input type="button" name="button2" id="but_sub" value="Back" onclick="location.href='./student.php'" />
          </label>
        </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
	
</body>
<?
	echo"<script>form1.semester.value='".$row['studsemester']."';</script>";
?>
</html>
