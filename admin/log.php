<?
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
        <td colspan="3" id="head_txt"><div align="center">Log Management</div></td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="23" valign="middle"><div align="left" style="margin:3px"><a href="#add" style="text-decoration:none; color:#990000"><img src="images/del_item.png" alt="Add" width="16" height="16" border="0"></a></div></td>
        <td width="786" valign="middle"><div align="left"><a href="./log_del.php" style="text-decoration:none; color:#990000"><strong>Clear Log</strong></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=90%><tr><td id=border align=center>Student Name</td><td id=border align=center>login Date & Time</td><td id=border align=center>logout Date & Time</td></tr>";
			$result=mysql_query("select * from logtable order by logindate");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center>".$row['loginid']."</td><td align=center>".$row['logindate']." ".$row['logintime']."</td><td align=center>".$row['logoutdate']." ".$row['logouttime']."</td></tr>";
			}
			echo"</table>"
		?>
        </div></td>
      </tr>
      <tr>
        <td width="91">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
        <a name="add">
	    </td>
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
