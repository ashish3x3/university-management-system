<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);  ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	if($_SESSION['cuser']!="")
	{
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="30px">
      <tr>
        <td width="8%" style="border:solid 1px #CCffff"><div align="center"><a href="./home.php">Home</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./profile.php">Profile</a></div></td>        
	    <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./staff.php">Staff</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./queries.php">Queries</a></div></td>        
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./log.php">Log</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./exam.php">Exams</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./assignment.php">Assignments</a></div></td> 
	       
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./log.php">Attendance</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./exam.php">Results</a></div></td>
        <td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./assignment.php">Time Table</a></div></td>       
		<td width="8%" style="border:solid 1px #CC0000"><div align="center"><a href="./blog.php">Blog</a></div></td>        
      </tr>
</table>
<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
}
?>