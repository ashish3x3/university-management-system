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
        <td colspan="2" id="head_txt"><div align="left">
          <div align="left" class="style2">&nbsp;Assignment Management</div>
        </div></td>
        </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      
      <tr>
        <td height="51">&nbsp;</td>
        <td width="63" valign="middle"><div align="left" style="margin:3px"><a href="#add" style="text-decoration:none; color:#990000"><img src="images/add_item.png" alt="Add" border="0"></a></div></td>
        <td width="785" valign="middle"><div align="left"><a href="#add" style="text-decoration:none; color:#990000"><strong>Add Assignment</strong></a></div></td>
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
                    <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Detail</div></td>
                    <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Edit</div></td>
                    <td width="10%"><div align="center">Delete</div></td>
                  </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="100%" id="box_border" valign="top" align="center"><div align="center">
             	<table border=0 width=96%>
                <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			include("./config.php");
			$result=mysql_query("select * from assignment order by assigndate desc");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=35%>".$row['assigntitle']."</td><td align=center width=11%>".$row['assigndate']."</td><td align=center width=16%>".$row['staffloginid']."</td><td align=center width=10%><a href=./assignment_detail.php?id=".$row['assignid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center width=10%><a href=./assignment_edit.php?id=".$row['assignid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center width=10%><a href=./assignment_del.php?id=".$row['assignid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
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
      <tr>
        <td width="74">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
          <a name="add"></a>
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
                 <form name="form1" method="post" action="./assignment_add_db.php" >
        <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">      
        <table width="900" height="273" border="0" align="center" cellpadding="0" cellspacing="0">
          
          
          <tr>
            <td colspan="3" id="head_txt">Add Assignment</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt3"><hr color="#990000" size="1px" width="95%" /></td>
          </tr>
          <tr>
            <td width="396"><div align="right" class="style1"><strong>Assignment Title :&nbsp; </strong></div></td>
            <td width="345"><div align="left"><span id="sprytextfield1">
              <input name="title" type="text" size="35" />
              <span class="textfieldRequiredMsg">*</span></span></div></td>
	            <td width="159">&nbsp;</td>
          </tr>
          <tr>
            <td height="29"><div align="right" class="style1"><strong>Assignment Date :&nbsp; </strong></div></td>
            <td><div align="left">
    <span id="sprytextfield2">
    <input type="text" name="txtDate" maxlength="10" size="15" />
    <span class="textfieldRequiredMsg">*</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> (dd/mm/yyyy)</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="74"><div align="right" class="style1"><strong>Assignment Text :&nbsp; </strong></div></td>
            <td><div align="left"><span id="sprytextarea1">
               <textarea name="assign_text" cols="35" rows="4" id="textfield3"></textarea>
            <span class="textareaRequiredMsg">*</span></span></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1"><strong>Student Semester :&nbsp; </strong></div></td>
            <td><div align="left">
                <label>
                <select name="sem" style="width:200px;">
                  <option value="MCA-1" selected="selected">B.Tech-1</option>
                  <option value="MCA-2">B.Tech-2</option>
                  <option value="MCA-3">B.Tech-3</option>
                  <option value="MCA-4">B.Tech-4</option>
                  <option value="MCA-5">B.Tech-5</option>
                  <option value="MCA-6">B.Tech-6</option>
                  <option value="FYBCOM">B.Tech-7</option>
                  <option value="SYBCOM">B.Tech-8</option>
                  <option value="TYBCOM">M.Tech-1</option>
                  <option value="FYBBA">M.Tech-2</option>
                  <option value="SYBBA">M.Tech-3</option>
                  <option value="TYBBA">M.Tech-4</option>
                </select>
                </label>
            </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37" colspan="3"><div align="center">
                <label>
                <input type="submit" name="button" id="but_sub" value="Add" />
                </label>
                <label>
                <input type="reset" name="button2" id="but_sub" value="Reset" />
                </label>
            </div></td>
          </tr>
        </table>
	    </form>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>          </td>
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
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "date", {format:"dd/mm/yyyy"});
//-->
</script>
</body>
</script>
</html>
