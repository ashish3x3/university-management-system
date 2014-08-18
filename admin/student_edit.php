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
        <td colspan="3" id="head_txt">Edit Student</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      <tr>
        <td width="401"><div align="right" class="style1">Student Surname : </div></td>
        <td width="223"><div align="left">
            <label>
              <input name="surname" type="text" size="35" value="<?=$row['studsurname']; ?>" />
              </label>

          </div></td>
        <td width="276">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Firstname : </div></td>
        <td><div align="left">
          <label>
          <input name="firstname" type="text" id="textfield2" size="35" value="<?=$row['studfirstname']; ?>" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Lastname : </div></td>
        <td><div align="left">
          <label>
          <input name="lastname" type="text" id="textfield3" size="35" value="<?=$row['studlastname']; ?>" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Semester : </div></td>
        <td><div align="left">
          <label>
          <select name="semester" style="width:200px;">
            <option value="MCA-1" selected="selected">MCA-1</option>
            <option value="MCA-2">MCA-2</option>
            <option value="MCA-3">MCA-3</option>
            <option value="MCA-4">MCA-4</option>
            <option value="MCA-5">MCA-5</option>
            <option value="MCA-6">MCA-6</option>
            <option value="FYBCOM">FYBCOM</option>
            <option value="SYBCOM">SYBCOM</option>
            <option value="TYBCOM">TYBCOM</option>
            <option value="FYBBA">FYBBA</option>
            <option value="SYBBA">SYBBA</option>
            <option value="TYBBA">TYBBA</option>
          </select>
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Student Loginid : </div></td>
        <td>
          <div align="left">
            <input name="loginid" type="text" id="textfield4" size="35" value="<?=$row['studloginid']; ?>" />
            </div>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Password : </div></td>
        <td><div align="left">
          <label>
          <input name="password" type="password" id="textfield5" size="35" value="<?=$row['studpassword']; ?>" onblur="chk_fld()" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label>
          <input type="submit" name="button" id="but_sub" value="Edit" />
          </label>
          <label>
          <input type="button" name="button2" id="but_sub" value="Cancel" onclick="location.href='./student.php'" />
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
<script language="javascript">
function chk_fld()
{
	if(form1.loginid.value == form1.password.value)
	{
		alert("Loginid And Password have to be different");
		form1.loginid.focus();
	}
}
</script>
<?
	echo"<script>form1.semester.value='".$row['studsemester']."';</script>";
?>

</html>
