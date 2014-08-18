<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	blog_visit($id);
	$result=mysql_query("select * from blog where blogid=$id");
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
.style1 {color: #990000}
.style3 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
    <td id="mid" valign="top"><table width="900" height="450" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center">
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
              <table width="900" height="492" border="0" align="center" cellpadding="0" cellspacing="0">
              
              
              <tr>
                <td height="41" colspan="4" id="head_txt">Blog Detail</td>
              </tr>
              <tr>
                <td colspan="4" id="head_txt3"><hr color="#990000" size="1px" width="95%" /></td>
              </tr>
              <tr>
                <td width="136" height="23"><div align="right" class="style1"><strong>Blog Subject : &nbsp;</strong></div></td>
                <td width="599"><div align="left"><strong>
                    <?=$row['blogsubject']; ?>
                </strong></div></td>
                <td width="161"><div align="right"></div>                  </td>
                <td width="4">&nbsp;</td>
              </tr>
              
              <tr>
                <td height="23"><div align="right" class="style1"><strong>Blog Text : &nbsp;</strong></div></td>
                <td><div align="left">
                    <?=$row['blogtext']; ?>
                </div></td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="23"><div align="right"><strong>Blog Date :&nbsp;</strong></div></td>
                <td><div align="left">
                  <?=$row['blogdate']; ?>
                </div></td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="23"><div align="right"><strong>Blog Posted By :&nbsp;</strong></div></td>
                <td><div align="left">
                  <?=$row['loginid']; ?>
                </div></td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="40">&nbsp;</td>
                <td><div align="left">
                  <input type="button" name="button2" id="but_sub" value="BACK" onclick="location.href='./blog.php?msg=Blog Edited'" />
                </div></td>
                <td colspan="2">&nbsp;</td>
              </tr>
              
              <tr>
                <td height="37" colspan="4"><hr size="1px" color="#990000" width="95%"></td>
              </tr>
              <tr>
                <td height="28" colspan="4"><div align="center"><span class="style3">: Reply : </span></div></td>
              </tr>
              
              <tr>
                <td height="65" colspan="4"><div align="center">
                <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
					$result=mysql_query("select * from blogreply where blogid=$id order by blogid desc");
				?>	
                  <table width="91%" height="21" border="0" cellpadding="0" cellspacing="0" style="border:solid 1px #FF9900">
                    <tr>
                      <td><div align="center">
					  <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING); 
					  	echo "<table border=0 width=100%><tr><td style='border:solid 1px #FF9900' align=center><b>Replier</b></td><td style='border:solid 1px #FF9900' align=center><b>Reply</b></td></tr>";
					  	while($row=mysql_fetch_array($result))
						{
							echo "<tr><td align=center>".$row['blogreplier']."</td><td align=center>".$row['blogreplytxt']."</td></tr>";
						}
						echo"</table>";
					  ?>
                      </div></td>
                    </tr>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td height=33 colspan=3><hr size=1px color="#990000" width="95%"></td>
              </tr>
              
              <tr>
                <td height=21 colspan=3><div align="center"><span class="style2"><strong>Reply Blog</strong></span></div></td>
              </tr>
              <form id="form1" name="form1" method="post" action="./blog_reply_db.php">
              <input type="hidden" name="id" value="<?=$_GET['id']; ?>">
              <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">
              <tr>
                <td height=21 colspan=3><div align="center"><span id="sprytextarea1">
                  <textarea name="reply" cols="45" rows="5"></textarea>
                  <span class="textareaRequiredMsg">*</span></span></div></td>
              </tr>
              <tr>
                <td height="21" colspan="3"><div align="center">
                  <label>
                  <input type="submit" name="button" id="but_sub" value="Reply" />
                  </label>
                </div></td>
              </tr>
              </form>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
            <tr>
              <td valign="top"><div align="center">
                <form action="./assignment_add_db.php" method="post" name="form1" >
                  <table width="900" height="273" border="0" align="center" cellpadding="0" cellspacing="0">
                    </table>
                </form>
              </div></td>
            </tr>
          </table>
            
          
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
