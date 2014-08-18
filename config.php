<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
        error_reporting(E_ALL ^ ~E_NOTICE);
	$dbhost="localhost";
	$dbusr="root";
	$dbpass="";
	$database="college_portal";
	mysql_connect($dbhost,$dbusr,$dbpass);
	mysql_select_db($database) or die("databse not connected");
?>