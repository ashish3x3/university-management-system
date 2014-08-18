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
        <td colspan="3" id="head_txt"><div align="center">Student Management</div></td>
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
        <td width="766" valign="middle"><div align="left"><a href="#add" style="text-decoration:none; color:#990000"><strong>Add Student</strong></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=90%><tr><td id=border align=center>Student Name</td><td id=border align=center>Class</td><td id=border align=center>Detail</td><td id=border align=center>Edit</td><td id=border align=center>Delete</td></tr>";
			$result=mysql_query("select * from student order by studsurname");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center>".$row['studsurname']." ".$row['studfirstname']."</td><td align=center>".$row['studsemester']."</td><td align=center><a href=./student_detail.php?id=".$row['studid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center><a href=./student_edit.php?id=".$row['studid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center><a href=./student_del.php?id=".$row['studid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
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
	    <form id="form1" name="form1" method="post" action="./student_add_db.php" >        
        <table width="900" height="316" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="3" id="head_txt2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt">Add Student</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
          </tr>
          <tr>
            <td height="22"><div align="right" class="style1">Student Loginid : </div></td>
            <td><div align="left">
                <span id="sprytextfield1">
                <input name="loginid" type="text" id="textfield4" size="35" onblur="chk_login(this);" />
                </span></div></td>
            <td><div align="left">*
              <input name="valid" type="text" id="textfield" size="35"  style="border:solid 1px #FFFFFF;" readonly="readonly" />
            </div></td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Student Password : </div></td>
            <td><div align="left">
                <span id="sprytextfield2">
                <input name="password" type="password" id="textfield5" size="35" onblur="chk_fld()" />
                </span></div></td>
            <td><div align="left">*</div></td>
          </tr>
          
          <tr>
            <td width="399"><div align="right" class="style1">Student Surname : </div></td>
            <td width="225"><div align="left">
                <span id="sprytextfield3">
                <input name="surname" type="text" size="35" />
                </span></div></td>
            <td width="276"><div align="left">*</div></td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Student Firstname : </div></td>
            <td><div align="left">
                <span id="sprytextfield4">
                <input name="firstname" type="text" id="textfield2" size="35" />
                </span></div></td>
            <td><div align="left">*</div></td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Student Lastname : </div></td>
            <td><div align="left">
                <label>
                <input name="lastname" type="text" id="textfield3" size="35" />
                </label>
            </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Student Semester : </div></td>
            <td><div align="left">
                <label>
                <select name="semester" id="select" style="width:200px;">
                  <option value="MCA-1" selected="selected">MCA-1</option>
                  <option value="MCA-2">MCA-2</option>
                  <option value="MCA-3">MCA-3</option>
                  <option value="MCA-4">MCA-4</option>
                  <option value="MCA-5">MCA-5</option>
                  <option value="MCA-6">MCA-6</option>
                  <option value="FYBCOM">FYBCOM</option>
                  <option value="SYBCOM">SYBCOM</option>
                  <option value="TYBCOM">TYBCOM</option>
                  <option value="FYBBA">FYBBA</option>
                  <option value="SYBBA">SYBBA</option>
                  <option value="TYBBA">TYBBA</option>
                 </select>
                </label>
            </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="37">&nbsp;</td>
            <td height="37">* Fields Are Required</td>
            <td height="37">&nbsp;</td>
          </tr>
          <tr>
            <td height="37" colspan="3"><div align="center">
                <label>
                <input type="submit" name="button" id="but_sub" value="Submit" />
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
	    </form></td>
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
		location.href="student.php?loginid="+me.value;	
	}
	function chk_fld()
	{
		if(form1.loginid.value == form1.password.value)
		{
			alert("Loginid And Password have to be different");
			form1.password.focus();
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
<?
	if($_GET['loginid']!="")
	{
		$result=mysql_query("select * from student where studloginid='".$_GET['loginid']."'");
		if(mysql_num_rows($result)>0)
		{
			echo"<script>form1.loginid.value='".$_GET['loginid']."'; form1.loginid.focus(); form1.valid.value='Not Available'; </script>";
		}
		else
		{
				echo"<script>form1.loginid.value='".$_GET['loginid']."'; form1.password.focus(); </script>";
		}
	}
?>
</body>
</html>
