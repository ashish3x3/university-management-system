<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	
	$dbhost="localhost";
	$dbusr="root";
	$dbpass="";
	$database="skyzoanc_college";
	mysql_connect($dbhost,$dbusr,$dbpass);
	mysql_select_db($database) or die("databse not connected");
?>