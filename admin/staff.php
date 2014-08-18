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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
        <td colspan="3" id="head_txt"><div align="center">Staff Management</div></td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="43" valign="middle"><div align="left" style="margin:3px"><a href="#add" style="text-decoration:none; color:#990000"><img src="images/add_item.png" alt="Add" border="0"></a></div></td>
        <td width="766" valign="middle"><div align="left"><a href="#add" style="text-decoration:none; color:#990000"><strong>Add Staff</strong></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong>
          <?=$_GET['msg']; ?>
        </strong></div></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=90%><tr><td id=border align=center>Staff Name</td><td id=border align=center>Role</td><td id=border align=center>Detail</td><td id=border align=center>Edit</td><td id=border align=center>Delete</td></tr>";
			$result=mysql_query("select * from staff order by staffsurname");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center>".$row['staffsurname']." ".$row['stafffirstname']."</td><td align=center>".$row['staffrole']."</td><td align=center><a href=./staff_detail.php?id=".$row['staffid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center><a href=./staff_edit.php?id=".$row['staffid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center><a href=./staff_del.php?id=".$row['staffid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
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

  <form action="./staff_add_db.php" method="post" name="form1" id="form1"  >        
    <table width="900" height="313" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" id="head_txt2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt">Add Staff</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Staff Loginid : </div></td>
        <td><div align="left">
                <span id="sprytextfield4">
                <input name="loginid" type="text" id="textfield4" size="35" onblur="chk_login(this)" />
                </span>*       </div></td>
        <td><input name="valid" type="text" id="textfield" size="35"  style="border:solid 1px #FFFFFF;" readonly="readonly" /></td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Password : </div></td>
        <td><div align="left">
            <span id="sprytextfield1">
            <label>
            <input name="password" type="password" id="textfield5" size="35" onblur="chk_fld()" />
            </label>
            </span>*</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="401"><div align="right" class="style1">Staff Surname : </div></td>
        <td width="287"><div align="left">
            <span id="sprytextfield2">
            <label>
            <input name="surname" type="text" size="35" />
            </label>
            </span>          *</div></td>
        <td width="212">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Firstname : </div></td>
        <td><div align="left">
          <span id="sprytextfield3">
          <label>
          <input name="firstname" type="text" id="textfield2" size="35" />
          </label>
          </span>        *</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Lastname : </div></td>
        <td><div align="left">
          <label>
          <input name="lastname" type="text" id="textfield3" size="35" />
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Designation : </div></td>
        <td><div align="left">
          <label>
          <select name="designation" id="select" style="width:200px;">
            <option value="PROFESSOR" selected="selected">PROFESSOR</option>
            <option value="PROGRAMMER">PROGRAMMER</option>
            <option value="ASSI.PROFESSOR">ASSI.PROFESSOR</option>
            <option value="CLERICAL">CLERICAL</option>
            <option value="HOD">HOD</option>
            <option value="PRINCIPAL">PRICIPAL</option>
          </select>
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Staff Role : </div></td>
        <td><div align="left">
          <label>
          <select name="role" id="select2" style="width:200px;">
            <option value="Admin">Admin</option>
            <option value="Other">Other</option>
                    </select>
          </label>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td height="27">&nbsp;</td>
        <td><blockquote>
          <p>* Fields Are Required</p>
        </blockquote></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label>
          <input type="submit" name="button" id="but_sub" value="Add" onclick="return chk_frm(this)" />
          </label>
          <label>
          <input type="reset" name="button2" id="but_sub" value="Reset" />
          </label>
        </div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
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
<script>
function chk_login(me)
{
		location.href="staff.php?loginid="+me.value;	
}
function chk_fld()
{
	if(form1.loginid.value == form1.password.value)
	{
		alert("Loginid And Password have to be different");
		form1.loginid.focus();
	}
}
	function chk_frm(me)
	{
		if(me.valid.value=="")
		{
			return true;
		}
		else
		{
			alert("Loginid Exists");
			me.loginid.focus();
			return false;
		}
	}
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
<?
	if($_GET['loginid']!="")
	{
		$result=mysql_query("select * from staff where staffloginid='".$_GET['loginid']."'");
		if(mysql_num_rows($result)>0)
		{
			echo"<script>form1.loginid.value='".$_GET['loginid']."'; form1.valid.value='Not Available'; </script>";
		}
		else
		{
				echo"<script>form1.loginid.value='".$_GET['loginid']."';</script>";
		}
	}
?>	
</body>
</html>
