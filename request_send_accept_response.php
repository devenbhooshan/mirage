<?php
session_start();
include("database.php");
if(array_key_exists('id1',$_GET)){

$id1=$_REQUEST['id1'];
$id2=$_REQUEST['id2'];
$response=$_REQUEST['response'];
if($response==2)
{
	//accept the friend request
	$time=time();
	$query_for_accepting_the_friend_request=mysql_query("update friend_list set status='1' where m_by='$id2' and m_to='$id1'");
	$query_for_accepting_the_friend_request=mysql_query("update friend_list set response_time='$time' where m_by='$id2' and m_to='$id1'");
	
}
else if($response==3){
	//Friend Request is send already . We can add here the cancel friend request 
	
}
else if($response==4){
	// Send the friend request 
	$time=time();
	$query_for_cheking_the_previous_request=mysql_query("select id from friend_list where m_by='$id1' and m_to='$id2'");
	if(mysql_num_rows($query_for_cheking_the_previous_request)==0)
	$query_for_sending_the_friend_request=mysql_query("insert into friend_list(id,m_by,m_to,status,send_time)values('','$id1','$id2','0','$time')");
	//echo "insert into friend_list(id,m_by,m_to,status,send_time)values('','$id1','$id2','0','$time')";
}




}
?>