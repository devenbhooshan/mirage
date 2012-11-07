<?php
	include("database.php");

	function Destroy() {
		
		unset($_SESSION['SESS_MEMBER_ID']);
		header("location: index.php");
	}

	if( isset($_SESSION['SESS_MEMBER_ID'])) {
		
		$email = $_SESSION['SESS_MEMBER_ID'];
		$qry = mysql_query("SELECT * FROM users WHERE email = '$email' ");
		if(mysql_num_rows($qry) != 1) { Destroy(); }
	} else { Destroy(); }?>
