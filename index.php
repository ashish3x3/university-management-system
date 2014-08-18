<!DOCTYPE html >
<html lang="en-US">
	
<head>   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT Network</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: 14px;
	color: #990000;
}
-->
</style>
</head>
<body>
<table id="main" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td id="top">
	   <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td id="head" ></td>
  </tr>
  <tr>
    <td id="menu">&nbsp;</td>
  </tr>
  <tr>
    <td id="mid" height="350px"  valign="top">
    	<table width="950" height="350px" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="661"><img src="images/myimage.gif"  width="500" height="300" </td>
        <td width="289">
        <table width="260px" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td style="background:url(images/login_head.jpg) no-repeat; height:30px; color:#FFFFFF; font-size:16px; font-weight:bold; text-align:center"><div align="center">Login</div></td>
          </tr>
          <tr>
            <td height="135" style="border:solid #990000 1px;">
			<div align="center">
            <form action="./login_db.php" method="post" name="frm">
              <table width="258" height="143" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="31" colspan="2">
				  <div align="center"><?
				  ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
				  echo $_GET['msg'];
				  ?></div></td>
                  </tr>
                <tr>
                  <td width="84" height="25"><div align="right" class="style3">Login Id :&nbsp;</div></td>
                  <td width="174" align="left">
                      <input type="text" name="user" />                  </td>
                </tr>
                <tr>
                  <td height="25"><div align="right" class="style3">Password :&nbsp;</div></td>
                  <td align="left"><input type="password" name="pass" /></td>
                </tr>
                <tr>
                  <td height="25"><div align="right" class="style3">Category :&nbsp;</div></td>
                  <td><div align="left">
                    <select name="category" style="width:150px">
                      <option value="student" selected="selected">Student</option>
                      <option value="staff">Faculty</option>
                              </select>

                  </div></td>
                </tr>
                
                <tr>
                  <td colspan="2" height="25">
                      <div align="center">
                        <input type="submit" name="button" id="but_sub" value="LOGIN" style="margin:5px;" />
                      </div></td>
                  </tr>
              </table>
              </form>
            </div></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>

    </td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? 
	ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./footer.php"); ?></td>
  </tr>
</table>
	
</body>
</html>
