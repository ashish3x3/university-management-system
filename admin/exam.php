<?
	include("./config.php");
	include("./function.php");
	chk_user();
	$sub=$_GET['subject'];
	if($sub=='')
	{
		$sub="%";
	}
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
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt"><div align="center">Question Bank</div></td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="45">&nbsp;</td>
        <form id="form2" name="form2" method="GET" action="exam.php">
        <td width="707"><div align="left">Select Subject : 
          <select name="subject">
            <option value="%" selected="selected">ALL</option>
            <option value="ACCOUNT">ACCOUNT</option>
            <option value="ECONOMICS">ECONOMICS</option>
            <option value="MATHS">MATHS</option>
            <option value="SCIENCE">SCIENCE</option>
            <option value="JAVA">JAVA</option>
            <option value="PHP">PHP</option>
            <option value="ENGLISH">ENGLISH</option>
            <option value="MSOFFICE">MSOFFICE</option>
          </select>
          <input type="submit" name="button" id="button" value="GO" />
        </div>          </td>
          </form>
        <td width="37">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=95%><tr><td id=border align=center>No</td><td id=border align=center width=70%>Que. Subject</td><td id=border align=center>Detail</td><td id=border align=center>Edit</td><td id=border align=center>Delete</td></tr>";
			$result=mysql_query("select * from questionbank where quesubject like '$sub' order by queid");
			$i=1;
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center>$i</td><td align=left>&nbsp;&nbsp;<a href=./que_detail.php?id=".$row['queid'].">".$row['quetext']."</a></td><td align=center><a href=./que_detail.php?id=".$row['queid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center><a href=./que_edit.php?id=".$row['queid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center><a href=./que_del.php?id=".$row['queid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
				$i++;
			}
			echo"</table>"
		?>
        </div></td>
      </tr>
      <tr>
        <td width="156">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
        <a name="add">
	    <form name="form1" method="post" action="./que_add_db.php" >
	      <table width="900" height="353" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" id="head_txt2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt4">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt">Post Question</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
            </tr>
            <tr>
              <td width="396"><div align="right" class="style1">Question Subject : </div></td>
              <td width="375"><div align="left">
                  <select name="sub" id="subject">
                    <option value="ACCOUNT" selected="selected">ACCOUNT</option>
                    <option value="ECONOMICS">ECONOMICS</option>
                    <option value="MATHS">MATHS</option>
                    <option value="SCIENCE">SCIENCE</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PHP">PHP</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="MSOFFICE">MSOFFICE</option>
                  </select>
              </div></td>
              <td width="129">&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="style1">Question Text : </div></td>
              <td><div align="left"><span id="sprytextarea1">
                <textarea name="que_text" cols="35" rows="2" id="textfield3"></textarea>
                <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 1 : </div></td>
              <td><div align="left"><span id="sprytextfield1">
                <input name="ans1" type="text" id="textfield" size="40" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 2 : </div></td>
              <td><div align="left"><span id="sprytextfield2">
                <input name="ans2" type="text" id="textfield2" size="40" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 3 : </div></td>
              <td><div align="left"><span id="sprytextfield3">
                <input name="ans3" type="text" id="textfield4" size="40" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 4 : </div></td>
              <td><div align="left"><span id="sprytextfield4">
                <input name="ans4" type="text" id="textfield5" size="40" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Answer : </div></td>
              <td><div align="left">
                  <select name="ans" id="select2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="37" colspan="3"><div align="center">
                  <?
					if(mysql_num_rows($result) <= 20)
					{
		                echo "<input type=\"submit\" name=\"button\" id=\"but_sub\" value=\"ADD\" />";
				}
				?>
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
<?
	echo"<script>form2.subject.value='$sub';</script>"; 
?>
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>
