<?php
session_start();
require("database.php");
$message=$_POST['name'];
$time=strftime('%c');
$user=$_SESSION['SESS_MEMBER_ID'];

$query="insert into chat (user,id_no,message,time) values('$user','','$message','$time')";
$result=mysql_query($query);

?>