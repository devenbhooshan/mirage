<?php
session_start();
include("core_functions.php");
require("database.php");
$id;
$message=text_to_html($_POST['name']);
if(array_key_exists('x',$_GET)){
				$id=$_GET['x'];
}
else $id=0;

$time=time();
	
$user=$_SESSION['SESS_MEMBER_ID'];
$query="insert into chat(id,m_by,m_to,message,time) values('','$user','$id','$message','$time')";
	
$result=mysql_query($query);

$query_for_checking_the_notification_status=mysql_query("select status from chat_notification_list where m_by='$user' and m_to='$id'");
if(mysql_num_rows($query_for_checking_the_notification_status)>0){
	
	$query_for_changing_the_notification_status=mysql_query("update chat_notification_list set status='0' where m_by='$user' and m_to='$id'");
	
}
else {
$query_for_creating_the_notification_status=mysql_query("insert into chat_notification_list(m_by,m_to,status)values('$user','$id','0')") ;	
}
?>

