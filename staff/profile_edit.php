<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./function.php");
	include("./config.php");
	chk_user();
	$id=$_SESSION['cuser'];
	$result=mysql_query("select * from staff where staffloginid='$id'");
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
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
      <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
        <tr>
          <td id="profile_top"></td>
        </tr>
        <tr>
          <td id="profile_mid" valign="top">
            <table width="100%" height="527" border="0" cellpadding="0" cellspacing="0" style="margin:5px;">
              <tr>
                <td width="4%" height="61">&nbsp;</td>
                <td width="14%"><img src="../img/<?=$row['staffimg']; ?>" alt="Profile" width="128" height="128" /></td>
                <td colspan="2"><div align="left"><span class="style1">&nbsp;
                  <?=$row['staffsurname']." ".$row['stafffirstname']; ?>'s Profile</span></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2"><hr size="1px" color="#990000"></td>
                <td width="2%">&nbsp;</td>
              </tr>
              <tr>
                <td height="300" colspan="4"><div align="center">
                <form action="profile_edit_db.php" method="post" enctype="multipart/form-data" name="frm">
                  <input name="id" type="hidden" value="<?=$row['staffid']; ?>" />                
                  <table width="100%" height="338" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Surname :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextfield2">
                        <input name="sname" type="text" value="<?=$row['staffsurname']; ?>" size="35" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Firstname :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextfield3">
                        <input name="fname" type="text" value="<?=$row['stafffirstname']; ?>" size="35" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Lastname :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextfield4">
                        <input name="lname" type="text" value="<?=$row['stafflastname']; ?>" size="35" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
                    </tr>
                    
                    <tr>
                      <td width="63">&nbsp;</td>
                      <td width="147"><div align="left"><strong>eMail id :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextfield1">
                      <input name="email" type="text" value="<?=$row['staffemail']; ?>" size="35" />
                      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid Email.</span></span></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Hobbies :</strong></div></td>
                      <td colspan="2"><div align="left">
                        <textarea name="hobbies" cols="35" rows="3">  <?=$row['staffhobby']; ?>
                        </textarea>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Qualification :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextarea1">
                        <textarea name="qualification" cols="35" rows="3">  <?=$row['staffqualification']; ?>
                        </textarea>
                        <span class="textareaRequiredMsg">A value is required.</span></span></div>                        </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Certification :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextarea2">
                        <textarea name="certification" id="textarea" cols="35" rows="3"><?=$row['staffcertification']; ?>
                        </textarea>
                                <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"><strong>Experience :</strong></div></td>
                      <td colspan="2"><div align="left"><span id="sprytextarea3">
                        <textarea name="experience" id="textarea2" cols="35" rows="3"><?=$row['staffexperience']; ?>
                        </textarea>
                        <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><strong>Profile Picture :</strong></td>
                      <td width="242"><div align="left">
                     	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
					    <input name="userfile" type="file" />
                      </div></td>
                      <td width="445"><div align="left">(Size: 128x128px )
                     	<input type="hidden" name="img" value="<?=$row['staffimg']; ?>" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="2"><label>
                        <div align="left">
                          <input type="submit" name="button" id="but_sub" value="EDIT" />
                          <input type="button" name="button2" id="but_sub" value="CANCEL" onclick="location.href='./profile.php'" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                  </form>
                </div></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
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
	
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
//-->
</script>
</body>
</html>
