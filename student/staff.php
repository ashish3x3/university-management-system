<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./function.php");
	include("./config.php");
	chk_user();
	$r=mysql_query("select * from staff");
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
	font-size: 16px;
	font-weight: bold;
}
select{
	border:solid 1px #E3D46F; 
}
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
        <td width="70" id="head_txt"><div align="right"><img src="images/person2_f2.png" alt="student" width="32" height="32" /></div></td>
        <td width="809" id="head_txt"><div align="left">
          <div align="left" class="style2">&nbsp;Staff Information</div>
        </div></td>
        <td width="21" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      
      <tr>
        <td colspan="3" height="40px"><table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="79">&nbsp;</td>
            <td width="821" align="left">
	            <ul>
            	  <div align="left">
            	    <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
					while($row=mysql_fetch_array($r))                	
					{
						echo"<li><a href=./staff_profile.php?id=".$row['staffid'].">".$row['staffsurname']." ".$row['stafffirstname']."</a>";
					}
				?>
          	      </div>
	            </ul>            </td>
          </tr>
        </table></td>
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
