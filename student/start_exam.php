<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	chk_user();
	$sub=$_GET['sub'];
	$date=date("d/m/Y");
	$time=date("H:i:s");
	$result=mysql_query("select * from questionbank where quesubject='$sub'");
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
            <div align="left"><?=$sub; ?> Exam</div>
        </div></td>
        <td width="37" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px" /></td>
      </tr>
     <tr>
        <td colspan="3"><div align="center">
          <table width="902" border="0" cellpadding="0" cellspacing="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td height="82" valign="top" id="profile_mid">
              <div align="center">
		       

<form action="./end_exam.php" method="post" name="frm">
<input type="hidden" value="<?=$sub; ?>" name="id">
<table border="0" align="left" style="margin-left:25px;" width="95%">
	<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
		$i=1;
		while($row=mysql_fetch_array($result))
		{
	    	echo"<tr><td align=left width=2%><b>".$i.".</b></td>
			<td align=left><b>".$row['quetext']."</b></td></tr>
			<tr>
			<td></td><td align=left><input type=radio name=".$row['queid']." value=1>".$row['queans1']."</td>
			</tr>
			<tr>
			<td></td><td align=left><input type=radio name=".$row['queid']." value=2>".$row['queans2']."</td>
			</tr>
			<tr>
			<td></td><td align=left><input type=radio name=".$row['queid']." value=3>".$row['queans3']."</td>
			</tr>
			<tr>
			<td></td><td align=left><input type=radio name=".$row['queid']." value=4>".$row['queans4']."</td>
			</tr>";
			$i++;
		}
	?>
    <tr><td height="41"></td>
    <td>
      <div align="left">
        <input type="submit" value="submit" id="but_sub">
        </div></td>
    <td>&nbsp;</td>
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
