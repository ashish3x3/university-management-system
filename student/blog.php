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
        <td width="40" id="head_txt"><div align="center"></div></td>
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
                    <td width="12%"><div align="center">Detail</div></td>
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
				echo"<tr><td align=center width=25%><a href=./blog_detail.php?id=".$row['blogid'].">".$row['blogsubject']."</a></td><td align=center width=18%>".$row['blogdate']."</td><td align=center width=12%>".get_blogreply($row['blogid'])."</td><td align=center width=11%>".$row['blogvisit']."</td><td align=center width=13%><a href=./blog_detail.php?id=".$row['blogid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
			}
		?>
                </table>
              
              </div></td>
            </tr>
          </table>
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
