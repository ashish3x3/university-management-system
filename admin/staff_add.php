<?
	include("./function.php");
	chk_user();
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
    <form action="./staff_add_db.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
    <table width="900" height="317" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" id="head_txt2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt">Add Staff</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      <tr>
        <td width="401"><div align="right" class="style1">Staff Surname : </div></td>
        <td width="250"><div align="left">
            <label>
              <input name="surname" type="text" size="35" />
              </label>

          </div></td>
        <td width="249">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Firstname : </div></td>
        <td><div align="left">
          <label>
          <input name="firstname" type="text" id="textfield2" size="35" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Lastname : </div></td>
        <td><div align="left">
          <label>
          <input name="lastname" type="text" id="textfield3" size="35" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Designation : </div></td>
        <td><div align="left">
          <label>
          <select name="designation" id="select" style="width:200px;">
            <option value="PROFESSOR" selected="selected">PROFESSOR</option>
            <option value="PROGRAMMER">PROGRAMMER</option>
            <option value="ASSI.PROFESSOR">ASSI.PROFESSOR</option>
            <option value="CLERICAL">CLERICAL</option>
            <option value="HOD">HOD</option>
            <option value="PRINCIPAL">PRICIPAL</option>

          </select>
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Staff Loginid : </div></td>
        <td>
          <div align="left">
            <input name="loginid" type="text" id="textfield4" size="35" />
            </div>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Password : </div></td>
        <td><div align="left">
          <label>
          <input name="password" type="password" id="textfield5" size="35" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><div align="right" class="style1">Staff Role : </div></td>
        <td><div align="left">
          <label>
          <select name="role" id="select2" style="width:200px;">
            <option value="Admin">Admin</option>
            <option value="Other">Other</option>
                </select>
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="32"><div align="right">Profile Image :</div></td>
        <td>      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
          <input name="userfile" type="file" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label>
          <input type="submit" name="button" id="but_sub" value="Submit" />
          </label>
          <label>
          <input type="reset" name="button2" id="but_sub" value="Reset" />
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
</html>
