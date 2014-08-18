<? 
	include("./function.php");
	ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	chk_user();
	$fld=$_GET['fld'];
	$val=$_GET['val'];
	if($val=="")
	{
		$fld="studfirstname";
		$val="%";
	}
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
          <div align="left" class="style2">&nbsp;Student Information</div>
        </div></td>
        <td width="21" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#CCCCCC" size="1px"></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" height="40px">
        <form id="form1" name="form1" method="GET" action="./student.php">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="40px" style="background:url(images/search_bg.jpg) no-repeat">
          <tr>
            <td width="3%">&nbsp;</td>
            <td width="15%"><div align="left" class="style1">Search Student</div></td>
            <td width="11%"><div align="right">Search Value :&nbsp;</div></td>
            <td width="18%"><div align="left">
                  <input type="text" name="val" style="border:solid 1px #E3D46F" />
              </div></td>
            <td width="16%"><div align="right">Select Search Field : &nbsp;</div></td>
            <td width="18%"><label>
              <select name="fld" style="width:150px;" >
                <option value="studsurname">SURNAME</option>
                <option value="studfirstname" selected="selected">FIRST NAME</option>
                <option value="studlastname">LAST NAME</option>
                <option value="studsemester">SEMESTER</option>
                <option value="studloginid">LOGIN ID</option>
                                          </select>
            </label></td>
            <td width="15%"><div align="center">
              <label>
              <div align="right">
                <input type="submit" name="button" id="but_sub" style="height:20px; width:100px" value="Submit" />
              </div>
              </label>
            </div></td>
            <td width="4%">&nbsp;</td>
          </tr>
        </table>
        </form>        </td>
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
              <td width="18" id="box_left">&nbsp;</td>
              <td width="780" id="box_mid"><table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="45%" style="border-right:solid 1px #CC0000;"><div align="center">Student Name</div></td>
                    <td width="26%" style="border-right:solid 1px #CC0000;"><div align="center">Class</div></td>
                    <td width="29%"><div align="center">Profile</div></td>
                    </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="100%" id="box_border" valign="top" align="center"><div align="center">
                <table border="0" width="100%" >
                    <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
			include("./config.php");
			$result=mysql_query("select * from student where $fld like '$val%' order by studsurname");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center width=45%>".$row['studsurname']." ".$row['studfirstname']."</td><td align=center width=26%>".$row['studsemester']."</td><td align=center width=29%><a href=./student_detail.php?id=".$row['studid']."><img src=./images/detail_item.png alt=Profile border=0></a></td></tr>";
			}
		?>
                  </table>
                  </div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
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
