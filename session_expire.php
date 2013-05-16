<?php
include("database.php");
$query_for_online_users=mysql_query("select login_time,id_no from login where status='1'");
if(mysql_num_rows($query_for_online_users)>0){
while($rows_for_online_users=mysql_fetch_array($query_for_online_users)){
$login_time=$rows_for_online_users['login_time'];
$online_users_id_no=$rows_for_online_users['id_no'];	
$query_for_last_chat=mysql_query("select time from chat where m_by='$online_users_id_no' order by time desc limit 1");
$last_chat_time=0;
$present_time=time();
if(mysql_num_rows($query_for_last_chat)>0){

$rows_for_last_chat=mysql_fetch_array($query_for_last_chat);
$last_chat_time=$rows_for_last_chat['time'];


}
//echo ($present_time-$login_time)." ".($present_time-$last_chat_time)."<br>";
if($present_time-$login_time>60*10&&$present_time-$last_chat_time>60*10){

$qry="update login set logout_time='$present_time' WHERE id_no='$online_users_id_no' and status='1' ";
mysql_query($qry);
$qry="update login set status='0'  WHERE id_no='$online_users_id_no' and status='1' ";
mysql_query($qry);

}

}
	
}


?>