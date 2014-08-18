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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
    <td id="mid" valign="top"><table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
      <tr>
        <td id="profile_top"></td>
      </tr>
      <tr>
        <td id="profile_mid" valign="top"><div align="center">
         <form id="form1" name="form1" method="post" action="./pass_edit_db.php">        
         <input type="hidden" name="id" value="<?=$_SESSION['cuser']; ?>" />
          <table width="900" height="140" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" id="head_txt"><div align="center">Change Password</div></td>
              </tr>
            <tr>
              <td colspan="2"><hr color="#990000" size="1px" width="90%"></td>
              </tr>
            <tr>
              <td width="440"><div align="right"><strong>Old Password :&nbsp;</strong></div></td>
              <td width="460"><div align="left"><span id="sprytextfield1">
                <input type="password" name="opass" id="textfield" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
            </tr>
            <tr>
              <td><div align="right"><strong>New Password :&nbsp;</strong></div></td>
              <td><div align="left"><span id="sprytextfield2">
                <input type="password" name="npass" id="textfield2" onblur="chk_fld()" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="button" id="but_sub" value="CHANGE" />
                <input type="button" name="button2" id="but_sub" value="Cancel" onclick="location.href='./profile.php'" />
              </label></td>
            </tr>
          </table>
         </form>
        </div></td>
      </tr>
      <tr>
        <td id="profile_bot">&nbsp;</td>
      </tr>
    </table>      
    </td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
	
<script type="text/javascript">
function chk_fld()
{
	if(form1.id.value == form1.npass.value)
	{
		alert("Loginid And Password have to be different");
		form1.npass.focus();
	}
}
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
