<?php
session_start();
require("database.php");
$id;
$message=$_POST['name'];
if(array_key_exists('x',$_GET)){
				$id=$_GET['x'];
}
else $id=0;
$time=time();
$user=$_SESSION['SESS_MEMBER_ID'];
$query="insert into chat(id,m_by,m_to,message,time) values('','$user','$id','$message','$time')";

$result=mysql_query($query);


?>