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
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:5px;">
              <tr>
                <td colspan="4"><div align="center"><?=$_GET['msg']; ?></div></td>
                </tr>
              <tr>
                <td width="4%" height="61">&nbsp;</td>
                <td width="14%"><img src="../img/<?=$row['staffimg']; ?>" alt="Profile" width="128" height="128" style="border:double 2px #CC0000;" /></td>
                <td colspan="2"><div align="left"><span class="style1">&nbsp;
                  <?=$row['staffsurname']." ".$row['stafffirstname']; ?>'s Profile</span></div></td>
              </tr>
              <tr>
                <td colspan="4"><hr size="1px" color="#990000" width="93%"></td>
                </tr>
              <tr>
                <td colspan="4"><div align="center">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="28">&nbsp;</td>
                      <td height="25"><div align="left"><strong>Name :</strong></div></td>
                      <td width="520"><div align="left">
                        <?=$row['staffsurname']." ".$row['stafffirstname']." ".$row['stafflastname']; ?>
						</div></td>
                      <td width="36"><div align="right"><a href="./profile_edit.php?id=<?=$_SESSION['cuser']; ?>"><img src="images/edit_f2.png" alt="Edit Profile" width="25" height="25" border="0" /></a></div></td>
                      <td width="183"><div align="left">&nbsp;<strong><a href="./profile_edit.php?id=<?=$_SESSION['cuser']; ?>" style="color:#990000">Edit Profile</a></strong></div></td>
                    </tr>
                    
                    <tr>
                      <td width="45" height="25">&nbsp;</td>
                      <td width="113" height="25"><div align="left"><strong>eMail id :</strong></div></td>
                      <td><div align="left"><a href="mailto:<?=$row['staffemail']; ?>"><?=$row['staffemail']; ?></a></div></td>
                      <td><div align="right"><a href="./pass_edit.php?id=<?=$_SESSION['cuser']; ?>"><img src="images/security_f2.jpg" alt="Edit Profile" width="25" height="25" border="0" /></a></div></td>
                      <td><div align="left">&nbsp;<strong><a href="./pass_edit.php?id=<?=$_SESSION['cuser']; ?>" style="color:#990000">Change Password</a></strong></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="25"><div align="left"><strong>Hobbies :</strong></div></td>
                      <td colspan="3"><div align="left"><?=$row['staffhobby']; ?></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="25"><div align="left"><strong>Qualification :</strong></div></td>
                      <td colspan="3"><div align="left">
                        <?=$row['staffqualification']; ?>
                      </div>                        </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="25"><div align="left"><strong>Certification :</strong></div></td>
                      <td colspan="3"><div align="left">
                        <?=$row['staffcertification']; ?>
                      </div>                        </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td height="25"><div align="left"><strong>Experience :</strong></div></td>
                      <td colspan="3"><div align="left">
                        <?=$row['staffexperience']; ?>
                      </div>                        </td>
                    </tr>
                  </table>
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
	
</body>
</html>
