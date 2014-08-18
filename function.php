<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
error_reporting(E_ALL ^ ~E_NOTICE);
	function chk_admin($user)
	{
		$result=mysql_query("select staffrole from staff where staffloginid='$user'");
		$row=mysql_fetch_array($result);
		if($row['staffrole']=="admin")
		{
			$_SESSION['role']="admin";
		}
		else
		{
			$_SESSION['role']="other";
		}
	}
	function chk_user()
	{
		session_start();
		ob_start();
		if($_SESSION['cuser']=="")
		{
			header("location: ./logout.php");
		}
	}
	function login_log($user)
	{
		$date=date("d/m/Y");
		$time=date("H:i:s");
		mysql_query("insert into logtable (loginid,logindate,logintime) values('$user','$date','$time')");
	}
	function logout_log($usr)
	{
		$date=date("d/m/Y");
		$time=date("H:i:s");
		$result=mysql_query("select logid from logtable where loginid='$usr' order by logid desc");
		$row=mysql_fetch_array($result);
		$logid=$row['logid'];
		mysql_query("update logtable set logouttime='$time', logoutdate='$date' where loginid='$usr' and logid='$logid'");
	}
	function get_staffname($user)
	{
			$result=mysql_query("select * from staff where staffloginid='$user'");
			$row=mysql_fetch_array($result);
			$name=$row['staffsurname']." ".$row['stafffirstname'];
			return $name;
	}
	function get_studname($user)
	{
			$result=mysql_query("select * from student where studloginid='$user'");
			$row=mysql_fetch_array($result);
			$name=$row['studsurname']." ".$row['studfirstname'];
			return $name;
	}
	function get_blogreply($blogid)
	{
		$result=mysql_query("select * from blogreply where blogid='$blogid'");
		$row=mysql_num_rows($result);
		return $row;
	}
	function blog_visit($bid)
	{
		$result=mysql_query("select blogvisit from blog where blogid='$bid'");
		$row=mysql_fetch_array($result);
		$visit=$row['blogvisit'];
		$visit++;
		mysql_query("update blog set blogvisit=$visit where blogid=$bid");
	}
?>