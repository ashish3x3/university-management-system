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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
        <td width="74" id="head_txt"><div align="right"><img src="images/address_f2.png" alt="Assignment" width="32" height="31" /></div></td>
        <td width="848" colspan="2" id="head_txt"><div align="left">
          <div align="left" class="style2">&nbsp;Assignments</div>
        </div></td>
        </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td id="box_left">&nbsp;</td>
              <td width="793px" id="box_mid"><table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="35%" style="border-right:solid 1px #CC0000;"><div align="center">Assignment Title</div></td>
                    <td width="11%" style="border-right:solid 1px #CC0000;"><div align="center">Date</div></td>
                    <td width="16%" style="border-right:solid 1px #CC0000;"><div align="center">Faculty</div></td>
                    <td width="10%"><div align="center">Detail</div></td>
                    </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="100%" id="box_border" valign="top" align="center"><div align="center">
             	<table border=0 width=96%>
                <?
			include("./config.php");
			$result=mysql_query("select * from assignment order by assigndate desc");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=35%>".$row['assigntitle']."</td><td align=center width=11%>".$row['assigndate']."</td><td align=center width=16%>".$row['staffloginid']."</td><td align=center width=10%><a href=./assignment_detail.php?id=".$row['assignid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
			}
		?>
			</table>					
              </div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
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
