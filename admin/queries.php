<?
	include("./config.php");
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
        <td colspan="3" id="head_txt"><div align="center">Query Management</div></td>
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
        <td width="766" valign="middle"><div align="left"><a href="#add" style="text-decoration:none; color:#990000"><strong>Add Query</strong></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <?
			include("./config.php");
			echo"<table border=0 id=border width=95%><tr><td id=border align=center>Query Subject</td><td id=border align=center>Date</td><td id=border align=center>Student</td><td id=border align=center>Faculty</td><td id=border align=center>Status</td><td id=border align=center>Detail</td><td id=border align=center>Edit</td><td id=border align=center>Delete</td></tr>";
			$result=mysql_query("select * from query order by querydate desc");
			while($row=mysql_fetch_array($result))
			{
				echo"<tr><td align=center>".$row['querysubject']."</td><td align=center>".$row['querydate']."</td><td align=center>".$row['studid']."</td><td align=center>".$row['staffid']."</td><td align=center>".$row['querystatus']."</td><td align=center><a href=./queries_detail.php?id=".$row['queryid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center><a href=./queries_edit.php?id=".$row['queryid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center><a href=./queries_del.php?id=".$row['queryid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
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
	    <form name="form1" method="post" action="./queries_add_db.php" onSubmit="return ValidateForm()">
        <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">      
        <table width="900" height="312" border="0" align="center" cellpadding="0" cellspacing="0">
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
            <td colspan="3" id="head_txt">Add Query</td>
          </tr>
          <tr>
            <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
          </tr>
          <tr>
            <td width="396"><div align="right" class="style1">Query Subject : </div></td>
            <td width="412"><div align="left"><span id="sprytextfield1">
              <label>
                <input name="subject" type="text" size="35" />
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
	            <td width="92">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Query Date : </div></td>
            <td><div align="left">
<span id="sprytextfield2">
<input type="text" name="txtDate" maxlength="10" size="15" value="" />
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> (dd/mm/yyyy)</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Query Text : </div></td>
            <td><div align="left"><span id="sprytextarea1">
              <label>
                <textarea name="query_text" cols="35" rows="4" id="textfield3"></textarea>
              </label>
              <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Faculty  : </div></td>
            <td><div align="left">
                <label>
                <select name="faculty" style="width:200px;">
                <?
						$result=mysql_query("select * from staff order by staffsurname");
                        while($row=mysql_fetch_array($result))
                        {
                  			echo"<option>".$row['staffsurname']." ".$row['stafffirstname']."</option>";      
                        }
				?>
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
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "date", {format:"dd/mm/yyyy"});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
<script language="javascript">
	var dtCh= "/";
var minYear=1900;
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strDay=dtStr.substring(0,pos1)
	var strMonth=dtStr.substring(pos1+1,pos2)
	var strYear=dtStr.substring(pos2+1)
	strYr=strYear
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		alert("The date format should be : dd/mm/yyyy")
		return false
	}
	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}

function ValidateForm(){
	var dt=document.form1.txtDate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }
</script>
</html>
