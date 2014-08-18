<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./function.php");
	chk_user();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
              <td width="460"><div align="left">
                    <input type="password" name="opass" id="textfield" />
               </div></td>
            </tr>
            <tr>
              <td><div align="right"><strong>New Password :&nbsp;</strong></div></td>
              <td><div align="left">
                <input type="password" name="npass" id="textfield2" onblur="chk_fld();" />
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="button" id="but_sub" value="CHANGE" />
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
	
</body>
<script type="text/javascript">
function chk_fld()
{
	if(form1.id.value == form1.npass.value)
	{
		alert("Loginid And Password have to be different");
		form1.npass.focus();
	}
}
</script>
</html>
