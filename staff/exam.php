<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
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
<head>   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #990000}
.style2 {font-size: 20px}
-->
</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #990000; font-weight: bold; }
-->
</style>
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td width="100%" id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
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
    <td id="mid" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="73" id="head_txt"><div align="right"><img src="images/copy_f2.png" alt="question" width="32" height="32" /></div></td>
        <td id="head_txt"><div align="left">
            <div align="left">&nbsp;<span class="style2">Question Bank</span></div>
        </div></td>
        <td id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px" /></td>
      </tr>
      <tr>
        <td height="45">&nbsp;</td>
        <form id="form2" name="form2" method="get" action="exam.php">
          <td width="790"><div align="left"><strong>Select Subject :</strong>
                  <select name="subject">
                   <option value="SOFTWARE ENGINEERING" selected="selected">SOFTWARE ENGINEERING</option>
                      <option value="COMPILER">COMPILER</option>
                      <option value="CRYPTOGRAPHY">CRYPTOGRAPHY</option>
                      <option value="ALGORITHM">ALGORITHM</option>
                      <option value="JAVA">JAVA</option>
                      <option value="PHP">PHP</option>
                      <option value="APTITUDE">APTITUDE</option>
                      <option value="DATA STRUCTURE">DATA STRUCTURE</option>
                  </select>
                  <input type="submit" name="button" id="button" value="GO" />
          </div></td>
        </form>
        <td width="37">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong>
          <?=$_GET['msg']; ?>
        </strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
            <table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="box_left">&nbsp;</td>
                <td width="784" id="box_mid">
                	<table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="5%" style="border-right:solid 1px #CC0000;"><div align="center">No</div></td>
                      <td width="62%" style="border-right:solid 1px #CC0000;"><div align="center">Question Text</div></td>
                      <td width="11%" style="border-right:solid 1px #CC0000;"><div align="center">Detail</div></td>
                      <td width="11%" style="border-right:solid 1px #CC0000;"><div align="center">Edit</div></td>
                      <td width="11%"><div align="center">Delete</div></td>
                    </tr>
                </table></td>
                <td width="18" id="box_right">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" id="box_border" valign="top" align="center">
                	<div align="center">
                    <table border="0" width="98%">
                      <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			include("./config.php");
			$result=mysql_query("select * from questionbank where quesubject like '$sub' order by queid");
			$i=1;
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=6%>$i</td><td align=left width=61%>&nbsp;&nbsp;<a href=./que_detail.php?id=".$row['queid'].">".$row['quetext']."</a></td><td align=center width=11%><a href=./que_detail.php?id=".$row['queid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center width=10%><a href=./que_edit.php?id=".$row['queid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center width=12%><a href=./que_del.php?id=".$row['queid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
				$i++;
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
        <td colspan="3"><div align="center">
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
              <form action="./que_add_db.php" method="post" name="form1" id="form1" >
            <table width="100%" height="353" border="0" align="center" cellpadding="0" cellspacing="0">
              
              
              
              <tr>
                <td colspan="3" id="head_txt">Post Question</td>
              </tr>
              <tr>
                <td colspan="3" id="head_txt3"><hr color="#990000" size="1px" width="96%" /></td>
              </tr>
              <tr>
                <td width="372"><div align="right" class="style1"><strong>Question Subject :&nbsp; </strong></div></td>
                <td width="432"><div align="left">
                    <select name="sub" id="subject">
                      <option value="SOFTWARE ENGINEERING" selected="selected">SOFTWARE ENGINEERING</option>
                      <option value="COMPILER">COMPILER</option>
                      <option value="CRYPTOGRAPHY">CRYPTOGRAPHY</option>
                      <option value="ALGORITHM">ALGORITHM</option>
                      <option value="JAVA">JAVA</option>
                      <option value="PHP">PHP</option>
                      <option value="APTITUDE">APTITUDE</option>
                      <option value="DATA STRUCTURE">DATA STRUCTURE</option>
                    </select>
                </div></td>
                <td width="98">&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right" class="style3">Question Text :&nbsp; </div></td>
                <td><div align="left"><span id="sprytextarea1">
                  <textarea name="que_text" cols="35" rows="2" id="textfield3"></textarea>
                  <span class="textareaRequiredMsg">*</span></span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Option 1 :&nbsp; </strong></div></td>
                <td><div align="left"><span id="sprytextfield1">
                  <input name="ans1" type="text" id="textfield" size="40" />
                  <span class="textfieldRequiredMsg">*</span></span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Option 2 :&nbsp; </strong></div></td>
                <td><div align="left"><span id="sprytextfield2">
                  <input name="ans2" type="text" id="textfield2" size="40" />
                  <span class="textfieldRequiredMsg">*</span></span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Option 3 :&nbsp; </strong></div></td>
                <td><div align="left"><span id="sprytextfield3">
                  <input name="ans3" type="text" id="textfield4" size="40" />
                  <span class="textfieldRequiredMsg">*</span></span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Option 4 :&nbsp; </strong></div></td>
                <td><div align="left"><span id="sprytextfield4">
                  <input name="ans4" type="text" id="textfield5" size="40" />
                <span class="textfieldRequiredMsg">*</span>
                </span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Answer :&nbsp; </strong></div></td>
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
                    <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
					if(mysql_num_rows($result) <= 20)
					{
		                echo "<input type=\"submit\" name=\"button\" id=\"but_sub\" value=\"ADD\" />";
					}
					else
					{
						echo"20 Question Completed";
					}
				?>
                </div></td>
              </tr>
            </table>
        </form>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>
        </div></td>
        </tr>
      
      <tr>
        <td colspan="3"></td>
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
<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
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
