<?
	include("./config.php");
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
        <td colspan="3" id="head_txt"><div align="center">Blog</div></td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=95%><tr><td id=border align=center>Blog Post</td><td id=border align=center>Posted Date</td><td id=border align=center>Reply</td><td id=border align=center>Visits</td><td id=border align=center>Detail</td><td id=border align=center>Edit</td><td id=border align=center>Delete</td></tr>";
			$result=mysql_query("select * from blog order by blogdate desc");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center><a href=./blog_detail.php?id=".$row['blogid'].">".$row['blogsubject']."</a></td><td align=center>".$row['blogdate']."</td><td align=center>".get_blogreply($row['blogid'])."</td><td align=center>".$row['blogvisit']."</td><td align=center><a href=./blog_detail.php?id=".$row['blogid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center><a href=./blog_edit.php?id=".$row['blogid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center><a href=./blog_del.php?id=".$row['blogid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
			}
			echo"</table>"
		?>
        </div></td>
      </tr>
      <tr>
        <td width="91">&nbsp;</td>
        <td width="809" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
        <a name="add">
	    <form name="form1" method="post" action="./blog_add_db.php" >
        <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">      
        <table width="900" height="312" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" id="head_txt2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt">Post Blog</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
          </tr>
          <tr>
            <td width="396"><div align="right" class="style1">Blog Subject : </div></td>
            <td width="459"><div align="left"><span id="sprytextfield1">
              <label>
                <input name="subject" type="text" size="50" />
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
	            <td width="45">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Blog Text : </div></td>
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
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
	    </form></td>
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
