<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	chk_user();
	$id=$_GET['id'];
	if($id=='')
	{
		$id=$_SESSION['cuser'];
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

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

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
        <td width="790" id="head_txt"><div align="left">
            <div align="left">&nbsp;<span class="style2">Online Examination</span></div>
        </div></td>
        <td width="37" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px" /></td>
      </tr>
      
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong>
          <?=$_GET['msg']; ?>
        </strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
            <table width="59%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="box_left">&nbsp;</td>
                <td width="784" id="box_mid">
                	<table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="5%" style="border-right:solid 1px #CC0000;"><div align="center">No</div></td>
                      <td width="62%" style="border-right:solid 1px #CC0000;"><div align="center">Exam Subject</div></td>
                      <td width="11%"><div align="center">Detail</div></td>
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
			$result=mysql_query("select * from examresult where studid='$id' order by examid desc");
			$i=1;
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=6%>$i</td>
				<td align=left width=61%>&nbsp;&nbsp;<a href=./exam_detail.php?id=".$row['examid'].">".$row['examsubject']."</a></td>
				<td align=center width=11%><a href=./exam_detail.php?id=".$row['examid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
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
          <table width="902" height="110" border="0" cellpadding="2" cellspacing="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td height="82" valign="top" id="profile_mid"><div align="center">
            <form action="./start_exam.php" method="get" name="form1" id="form1" >
            <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
             <tr>
                <td colspan="3" id="head_txt">Start Online Exam</td>
              </tr>
              <tr>
                <td colspan="3" id="head_txt3"><hr color="#990000" size="1px" width="96%" /></td>
              </tr>
              <tr>
                <td width="338" height="40"><div align="right" class="style1"><strong>Exam Subject :&nbsp; </strong></div></td>
                <td width="217"><div align="left">
                    <select name="sub" id="subject" style="width:200px">
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
                <td width="347"><input type="submit" name="but_sub" id="but_sub" value="START" /></td>
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
</body>
</html>
