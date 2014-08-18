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
<style type="text/css">
<!--
.style2 {font-size: 20px}
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
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="77" id="head_txt"><div align="right"><img src="images/history_f2.png" alt="log" width="32" height="32" /></div></td>
        <td width="817" id="head_txt"><div align="left">
          <div align="left" class="style2">&nbsp;Log</div>
        </div></td>
        <td width="6" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="18px" id="box_left">&nbsp;</td>
              <td width=774 id="box_mid">
              <table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="28%" style="border-right:solid 1px #CC0000;"><div align="center">Login Id</div></td>
                  <td width="34%" style="border-right:solid 1px #CC0000;"><div align="center">Login Date &amp; Time</div></td>
                  <td width="38%"><div align="center">Logout Date &amp; Time</div></td>
                </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="774px" id="box_border" valign="top" align="center"><div align="center">
              <table border="0" width="100%" align="center" style="margin:5px;">
        <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			include("./config.php");
			$result=mysql_query("select * from logtable where loginid='".$_SESSION['cuser']."' order by logindate");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=28%>".$row['loginid']."</td>
				<td align=center width=34%>".$row['logindate']." ".$row['logintime']."</td>
				<td align=center>".$row['logoutdate']." ".$row['logouttime']."</td></tr>";
			}
			
		?>
		</table></div></td>
              </tr>
          </table>
          <p>&nbsp;</p>
          
        </div></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
        <a name="add">	    </td>
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
