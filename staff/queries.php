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
.style3 {
	font-size: 20px
}
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
        <td id="head_txt"><div align="right"><img src="images/query.png" alt="query" width="32" height="33" /></div></td>
        <td colspan="2" id="head_txt"><div align="left" class="style3">&nbsp;Query Management</div></td>
        </tr>
      <tr>
        <td colspan="3"><hr color="#990000" size="1px"></td>
      </tr>
      
      <tr>
        <td height="50">&nbsp;</td>
        <td width="35" valign="middle"><div align="left" style="margin:3px"><a href="#add" style="text-decoration:none; color:#990000"><img src="images/add_item.png" alt="Add" width="25" height="25" border="0"></a></div></td>
        <td width="774" valign="middle"><div align="left"><a href="#add" style="text-decoration:none; color:#990000"><strong>Add Query</strong></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center" style="margin:5px;"><strong><?=$_GET['msg']; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
        <table width="900px" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="18px" id="box_left">&nbsp;</td>
              <td width=854 id="box_mid">
              <table width="100%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="25%" style="border-right:solid 1px #CC0000;"><div align="center">Query Subject</div></td>
                  <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Date</div></td>
                  <td width="20%" style="border-right:solid 1px #CC0000;"><div align="center">Student</div></td>
                  <td width="15%" style="border-right:solid 1px #CC0000;"><div align="center">Status</div></td>
                  <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Detail</div></td>
                  <td width="10%" style="border-right:solid 1px #CC0000;"><div align="center">Edit</div></td>
                  <td width="10%"><div align="center">Delete</div></td>                  
                </tr>
              </table></td>
              <td id="box_right">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" width="899px" id="box_border" valign="top" align="center">
              	<div align="center">
                <table border=0 id=border width=100%>
                <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
					include("./config.php");
					$result=mysql_query("select * from query order by querydate desc");
					while($row=mysql_fetch_array($result))
					{
						echo"<tr><td align=center width=25%><a href=./queries_detail.php?id=".$row['queryid'].">".substr($row['querysubject'],0,22)."...</a></td><td align=center width=10%>".$row['querydate']."</td><td align=center width=20%>".$row['studid']."</td><td align=center width=12%>".$row['querystatus']."</td><td align=center width=10%><a href=./queries_detail.php?id=".$row['queryid']."><img src=./images/detail_item.png alt=Detail border=0></a></td><td align=center width=10%><a href=./queries_edit.php?id=".$row['queryid']."><img src=./images/edit_item.png alt=Edit border=0></a></td><td align=center width=10%><a href=./queries_del.php?id=".$row['queryid']."><img src=./images/del_item.png alt=Delete border=0></a></td></tr>";
					}
			
				?>
		        	</table>
        			</div>               </td>
              </tr>
          </table>
        
        </div></td>
      </tr>
      <tr>
        <td width="91">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">
          <p><a name="add"></a>                    </p>
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
              <form name="form1" method="post" action="./queries_add_db.php" >
        <input type="hidden" name="login" value="<?=$_SESSION['cuser']; ?>">      
        <table width="900" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="42" colspan="3" id="head_txt">Add Query</td>
          </tr>
          <tr>
            <td colspan="3"><hr color="#990000" size="1px" width="95%" /></td>
          </tr>
          <tr>
            <td width="396"><div align="right" class="style1">Query Subject : </div></td>
            <td width="452"><div align="left"><span id="sprytextfield1">
              <label>
                <input name="subject" type="text" size="35" />
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
	            <td width="52">&nbsp;</td>
          </tr>
          <tr>
            <td height="31"><div align="right" class="style1">Query Date : </div></td>
            <td><div align="left">
<span id="sprytextfield2">
<input type="text" name="txtDate" maxlength="10" size="15" value="" />
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> (dd/mm/yyyy)</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="73"><div align="right" class="style1">Query Text : </div></td>
            <td><div align="left"><span id="sprytextarea1">
              <label>
                <textarea name="query_text" cols="35" rows="4" id="textfield3"></textarea>
              </label>
              <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="28"><div align="right" class="style1">Faculty  : </div></td>
            <td><div align="left">
                <label>
                <select name="faculty" style="width:200px;">
                <? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
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
        </table>
	    </form>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>          <p>&nbsp;</p></td>
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
