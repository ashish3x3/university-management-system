<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	chk_user();

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
.style2 {color: #990000; font-weight: bold; }
.style3 {font-size: 20px}
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
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td id="head_txt"><div align="center"></div></td>
        <td width="38" id="head_txt"><div align="left"><img src="images/css_f2.png" alt="blog" width="32" height="32" /></div></td>
        <td width="844" id="head_txt"><div align="left" class="style3">Blog</div></td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" width="95%" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <table width="95%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td id="box_left">&nbsp;</td>
              <td width="96%" id="box_mid">
              <table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="26%" style="border-right:solid 1px #CC0000;"><div align="center">Blog Post</div></td>
                    <td width="17%" style="border-right:solid 1px #CC0000;"><div align="center">Posted Date</div></td>
                    <td width="12%" style="border-right:solid 1px #CC0000;"><div align="center">Reply</div></td>
                    <td width="11%" style="border-right:solid 1px #CC0000;"><div align="center">Visits</div></td>
                    <td width="12%" style="border-right:solid 1px #CC0000;"><div align="center">Detail</div></td>
                    <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Edit</div></td>
                    <td width="12%"><div align="center">Delete</div></td>
                  </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="854px" id="box_border" valign="top" align="center"><div align="center">
             <table width="95%" border="0" align="center">
             <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			include("./config.php");
			$result=mysql_query("select * from blog order by blogdate desc");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=25%><a href=./blog_detail.php?id=".$row['blogid'].">".$row['blogsubject']."</a></td><td align=center width=18%>".$row['blogdate']."</td><td align=center width=12%>".get_blogreply($row['blogid'])."</td><td align=center width=11%>".$row['blogvisit']."</td><td align=center width=13%><a href=./blog_detail.php?id=".$row['blogid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center width=11%><a href=./blog_edit.php?id=".$row['blogid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center width=10%><a href=./blog_del.php?id=".$row['blogid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
			}
		?>
                </table>
              
              </div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
         </div></td>
      </tr>
      <tr>
        <td width="40">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
        <a name="add">
        <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
              <form name="form1" method="post" action="./blog_add_db.php" >
        <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">      
        <table width="900" height="181" border="0" align="center" cellpadding="0" cellspacing="0">
          
          
          <tr>
            <td colspan="3" id="head_txt">Post Blog</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt3"><hr color="#990000" width="95%" size="1px" /></td>
          </tr>
          <tr>
            <td width="396"><div align="right" class="style1"><strong>Blog Subject :&nbsp;</strong></div></td>
            <td width="476"><div align="left"><span id="sprytextfield1">
              <label>
                <input name="subject" type="text" size="50" />
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
	            <td width="28">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style2">Blog Text :&nbsp;</div></td>
            <td><div align="left"><span id="sprytextarea1">
              <label>
                <textarea name="blog_text" cols="35" rows="4" id="textfield3"></textarea>
              </label>
              <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37" colspan="3"><div align="center">
                <label>
                <input type="submit" name="button" id="but_sub" value="ADD" />
                </label>
                <label>
                <input type="reset" name="button2" id="but_sub" value="Reset" />
                </label>
            </div></td>
          </tr>
        </table>
	    </form>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>	    </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
