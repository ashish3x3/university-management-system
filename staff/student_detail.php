<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysql_query("select * from student where studid=$id");
	$row=mysql_fetch_array($result);

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
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING); echo $_SESSION['cuser']; ?> - <a href="./logout.php">Logout</a></strong></div></td>
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
    <td id="mid" valign="top">
    <form id="form1" name="form1" method="post" action="./student_edit_db.php">
    	<input name="id" type="hidden" value="<?=$id; ?>" />
    <table width="900" height="377" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" id="head_txt2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" id="head_txt">Student Detail</td>
        </tr>
      <tr>
        <td colspan="3" id="head_txt"><hr color="#CCCCCC" size="1px"></td>
        </tr>
      
      <tr>
        <td width="459"><div align="right" class="style1">Student Surname : </div></td>
        <td width="201"><div align="left">
            <?=$row['studsurname']; ?>
          </div></td>
        <td width="240">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Firstname : </div></td>
        <td><div align="left">
          <?=$row['studfirstname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Lastname : </div></td>
        <td><div align="left">
          <?=$row['studlastname']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style1">Student Semester : </div></td>
        <td><div align="left">
			<?=$row['studsemester']; ?>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="22"><div align="right" class="style1">Student Loginid : </div></td>
        <td>
          <div align="left">
			<?=$row['studloginid']; $user=$row['studloginid']; ?>
            
            </div>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="53" colspan="3"><div align="center"><table width="59%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="box_left">&nbsp;</td>
    <td width="784" id="box_mid"><table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="5%" style="border-right:solid 1px #CC0000;"><div align="center">No</div></td>
        <td width="62%" style="border-right:solid 1px #CC0000;"><div align="center">Exam Subject</div></td>
        <td width="11%"><div align="center">Detail</div></td>
      </tr>
    </table></td>
    <td width="18" id="box_right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" id="box_border" valign="top" align="center"><div align="center">
      <table border="0" width="98%">
        <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING); ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			$rs=mysql_query("select * from examresult where studid='$user' order by examid desc");
			$i=1;
			while($r=mysql_fetch_array($rs))
			{
				echo"<tr><td align=center width=6%>$i</td><td align=left width=61%>&nbsp;&nbsp;<a href=./exam_detail.php?id=".$r['examid'].">".$r['examsubject']."</a></td><td align=center width=11%><a href=./exam_detail.php?id=".$r['examid']."><img src=./images/detail_item.png alt=Detail border=0></a></td></tr>";
				$i++;
			}
		?>
      </table>
    </div></td>
  </tr>
</table></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <label></label>
          <label>
          <input type="button" name="button2" id="but_sub" value="Back" onclick="location.href='./student.php'" />
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
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><? include("./footer.php"); ?></td>
  </tr>
</table>
	
</body>
<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	echo"<script>form1.semester.value='".$row['studsemester']."';</script>";
?>
</html>
