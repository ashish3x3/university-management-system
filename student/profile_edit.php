<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./function.php");
	include("./config.php");
	chk_user();
	$id=$_SESSION['cuser'];
	$result=mysql_query("select * from student where studloginid='$id'");
	$row=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {color: #990000}
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
    <td id="mid" valign="top"><div align="center">
      <table width="95%" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
        <tr>
          <td id="profile_top"></td>
        </tr>
        <tr>
          <td id="profile_mid" valign="top">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0" style="margin:5px;">
              
              <tr>
                <td width="12" colspan="3"><div align="center">
                  <form id="form1" name="form1" method="post" action="./profile_edit_db.php">
                    <input name="id" type="hidden" value="<?=$row['studid']; ?>" />
                    <table width="900" height="277" border="0" align="center" cellpadding="0" cellspacing="0">
                      
                      <tr>
                        <td colspan="3" id="head_txt">Edit Student Profile</td>
                      </tr>
                      <tr>
                        <td colspan="3" id="head_txt"><hr color="#990000" width="95%" size="1px" /></td>
                      </tr>
                      <tr>
                        <td width="401"><div align="right" class="style2">Student Surname : </div></td>
                        <td width="223"><div align="left">
                            <label>
                            <input name="surname" type="text" size="35" value="<?=$row['studsurname']; ?>" />
                            </label>
                        </div></td>
                        <td width="276">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style2">Student Firstname : </div></td>
                        <td><div align="left">
                            <label>
                            <input name="firstname" type="text" id="textfield2" size="35" value="<?=$row['studfirstname']; ?>" />
                            </label>
                        </div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style2">Student Lastname : </div></td>
                        <td><div align="left">
                            <label>
                            <input name="lastname" type="text" id="textfield3" size="35" value="<?=$row['studlastname']; ?>" />
                            </label>
                        </div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style2">Student Semester : </div></td>
                        <td><div align="left">
                            <label>
                            <select name="semester" style="width:200px;">
                              <option value="MCA-1" selected="selected">B.Tech-1</option>
                              <option value="MCA-2">B.Tech-2</option>
                              <option value="MCA-3">B.Tech-3</option>
                              <option value="MCA-4">B.Tech-4</option>
                              <option value="MCA-5">B.Tech-5</option>
                              <option value="MCA-6">B.Tech-6</option>
                              <option value="FYBCOM">B.Tech-7</option>
                              <option value="SYBCOM">B.Tech-8</option>
                              <option value="TYBCOM">M.Tech-1</option>
                              <option value="FYBBA">M.Tech-2</option>
                              <option value="SYBBA">M.Tech-3</option>
                              <option value="TYBBA">M.Tech-4</option>
                            </select>
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
                            <input type="button" name="button2" id="but_sub" value="Cancel" onclick="location.href='./profile.php'" />
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
                  </div></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td id="profile_bot">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	echo"<script>form1.semester.value='".$row['studsemester']."';</script>";
?>	
</body>
</html>
