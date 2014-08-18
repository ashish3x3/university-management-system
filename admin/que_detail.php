<?
	include("./config.php");
	include("./function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysql_query("select * from questionbank where queid=$id");
	$row=mysql_fetch_array($result);
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
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">	    
	      <table width="900" height="353" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr>
              <td colspan="3" id="head_txt">Question Detail</td>
            </tr>
            <tr>
              <td colspan="3" id="head_txt3"><hr color="#CCCCCC" size="1px" /></td>
            </tr>
            <tr>
              <td width="375"><div align="right" class="style1">Question Subject : </div></td>
              <td width="488"><div align="left"><?=$row['quesubject']; ?></div></td>
              <td width="37">&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="style1">Question Text : </div></td>
              <td><div align="left">
                  <?=$row['quetext']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 1 : </div></td>
              <td><div align="left">
                 <?=$row['queans1']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 2 : </div></td>
              <td><div align="left">
                 <?=$row['queans2']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 3 : </div></td>
              <td><div align="left">
                  <?=$row['queans3']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Option 4 : </div></td>
              <td><div align="left">
                  <?=$row['queans4']; ?>
              </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right">Answer : </div></td>
              <td><div align="left"><?=$row['queansfinal']; ?></div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="37" colspan="3"><div align="center">
                <input type="button" name="button2" id="but_sub" value="BACK" onclick="location.href='./exam.php'" />
              </div></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
	    </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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
