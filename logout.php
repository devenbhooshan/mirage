<?php
session_start();
$user_email=$_SESSION['SESS_MEMBER_EMAIL'];
$pass=$_SESSION['SESS_MEMBER_PASS'];
include("database.php");

$qry="update user set status='0' WHERE email='$user_email' AND password='$pass' ";
mysql_query($qry);
		
session_destroy();

	 header("location: index.php");
 

?>
