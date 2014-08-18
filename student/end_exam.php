<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	chk_user();
	$date=date("d/m/Y");
	$time=date("H:i:s");
	
	$id=$_POST['id'];
	$result=mysql_query("select * from questionbank where quesubject='$id'");

		$t=0;
		$f=0;
		$tq=0;
		while($row=mysql_fetch_array($result))
		{
			$val=$row['queid'];
			if($_POST[$val]==$row['queansfinal'])
				$t++;
			else
				$f++;
			$tq++;
		}
		$per=($t*100)/$tq;
		$user=$_SESSION['cuser'];
		mysql_query("insert into examresult (studid,examdate,examtime,examsubject,examquetotal,examquetrue,examquefalse) values('$user','$date','$time','$id','$tq','$t','$f')");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {font-size: 20px}
-->
</style>
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td width="100%" id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
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
    <td id="mid" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="73" id="head_txt"><div align="right"><img src="images/copy_f2.png" alt="question" width="32" height="32" /></div></td>
        <td width="790" id="head_txt"><div align="left">
            <div align="left" class="style5"><?=$id; ?> Exam Result</div>
        </div></td>
        <td width="37" id="head_txt">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px" /></td>
      </tr>
     <tr>
        <td colspan="3"><div align="center">
          <table width="902" border="0" cellpadding="0" cellspacing="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td valign="top" id="profile_mid"><div align="center">
                <table width="900" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center" id="head_txt">Result</div></td>
                  </tr>
                  <tr>
                    <td><hr color="#990000" size="1px" width="95%"></td>
                  </tr>
                  <tr>
                    <td><div align="center">
                      <table width="651" height="134" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td colspan="3"><div align="center"><strong>Total Questions : 
                            <?=$tq; ?>
                          </strong></div></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div align="center"><strong>Correct Answers : 
                            <?=$t; ?>
                          </strong></div></td>
                        </tr>
                        <tr>
                          <td colspan="3"><div align="center"><strong>Wrong Answers : <?=$f; ?>
                          </strong></div></td>
                        </tr>
                        <tr>
                          <td><div align="right"><strong>Progress :&nbsp;</strong></div></td>
                          <td width="194"><div align="left">
                          <table width="195" height="18" border="0" style="border:solid 1px #990000" cellpadding="0" cellspacing="1">
                            <tr>
                              <td><table width="<?=$per; ?>%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td bgcolor="#CC6600">&nbsp;</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></div></td>
                          <td width="194"><div align="left">&nbsp;<strong>
                            <?=$per; ?>
                            %</strong></div></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><div align="center">
                            <label>
                            <input type="button" name="button" id="but_sub" value="BACK" onclick="location.href='./exam.php'" />
                            </label>
                          </div></td>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
                    </div></td>
                  </tr>
                </table>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>
        </div></td>
        </tr>
      
      <tr>
        <td colspan="3"></td>
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

