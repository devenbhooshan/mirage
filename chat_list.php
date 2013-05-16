<?php
session_start();
include("database.php");
echo "<font color='#FFFFFF'><h3>Chat List</h3></font><hr>";
$memid=$_SESSION['SESS_MEMBER_ID'];
$query_for_chat_messages=mysql_query("select  distinct m_by, m_to,message from chat where m_by='$memid' or m_to='$memid' order by time desc  ");

if(mysql_num_rows($query_for_chat_messages)>0){
	while($row_for_chat_messages=mysql_fetch_array($query_for_chat_messages)){
		$message=$row_for_chat_messages['message'];
		$m_by=$row_for_chat_messages['m_by'];
		$m_to=$row_for_chat_messages['m_to'];
		$query_for_temp_chat_list_check=mysql_query("select id from chat_list_temp where (id_no_user='$memid' and id_no_chat_list='$m_to') or (id_no_user='$memid' and id_no_chat_list='$m_by')");
		//echo "select id from chat_list_temp where (id_no_user='$memid' and id_no_chat_list='$m_to') or (id_no_user='$memid' and id_no_chat_list='$m_by')";
		if(mysql_num_rows($query_for_temp_chat_list_check)==0){
		$name;
		$message_sender='You';
		$friend_id=$m_by;
		if($m_to==$memid)
		{
			
			$query_for_temp_chat_list=mysql_query("insert into chat_list_temp (id,id_no_user,id_no_chat_list)values('','$m_to','$m_by')");
			$query_for_name=mysql_query("select first_name, last_name from user where id_no='$m_by'");
			$row_for_name=mysql_fetch_array($query_for_name);
			$name=$row_for_name['first_name']." ".$row_for_name['last_name'];
			$message_sender=$name;
		}
		else {
			$friend_id=$m_to;
			$query_for_temp_chat_list=mysql_query("insert into chat_list_temp (id,id_no_user,id_no_chat_list)values('','$m_by','$m_to')");
			$query_for_name=mysql_query("select first_name, last_name from user where id_no='$m_to'");
			$row_for_name=mysql_fetch_array($query_for_name);
			$name=$row_for_name['first_name']." ".$row_for_name['last_name'];
		}
		echo "<a href='index.php?x=".$friend_id."'><p><font size='+1' color='white'>".$name."</a></font><br>".$message_sender."&nbsp;&nbsp;&nbsp;".$message."<p>";
		
	}
	}
}
$query_for_deleting_temp_chat_list=mysql_query("DELETE FROM chat_list_temp WHERE id_no_user='$memid'");

?>