<?php
session_start();
include("database.php");

if(array_key_exists('exp',$_GET)){
	session_destroy();
	header("location:index.php?session_expire=1");
}
else{
$memid=$_SESSION['SESS_MEMBER_ID'];
$time=time();
$qry="update login set logout_time='$time' WHERE id_no='$memid' and status='1' ";
mysql_query($qry);
$qry="update login set status='0'  WHERE id_no='$memid' and status='1' ";
mysql_query($qry);

session_destroy();
header("location:index.php");
 
}
?>
