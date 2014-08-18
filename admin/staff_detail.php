<?
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysql_query("select * from staff where staffid=$id");
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
    <form name="form1" method="post" action="./staff_edit_db.php">
    	<input name="id" type="hidden" value="<?=$id; ?>" />
    <table width="900" height="277" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" id="head_txt2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt">Staff Detail</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      <tr>
        <td width="455"><div align="right" class="style1">Staff Surname : </div></td>
        <td width="225"><div align="left">
            <?=$row['staffsurname']; ?>
          </div></td>
        <td width="220">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Firstname : </div></td>
        <td><div align="left">
          <?=$row['stafffirstname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Lastname : </div></td>
        <td><div align="left">
          <?=$row['stafflastname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Designation : </div></td>
        <td><div align="left">
            <?=$row['staffdesignation']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Staff Loginid : </div></td>
        <td>
          <div align="left">
            <?=$row['staffloginid']; ?>
            </div>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Role : </div></td>
        <td><div align="left">
           <?=$row['staffrole']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label></label>
          <label>
          <input type="button" name="button2" id="but_sub" value="Back" onclick="location.href='./staff.php'" />
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
