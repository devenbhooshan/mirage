<?php
echo '
<div id="CollapsiblePanel1" class="CollapsiblePanel" style="display:none">
  <div class="CollapsiblePanelTab" tabindex="0">New Messages</div>
  <div class="CollapsiblePanelContent" >

';
session_start();
include("database.php");
if(isset($_SESSION['SESS_MEMBER_ID']))
$memid=$_SESSION['SESS_MEMBER_ID'];
//echo "<script>console.log('d".$memid."')</script>";
$query_for_message_status=mysql_query("select m_by from chat_notification_list where m_to='$memid' and status='0'");
if(mysql_num_rows($query_for_message_status)>0){
	while($rows_for_message_status=mysql_fetch_array($query_for_message_status)){
		$m_by=$rows_for_message_status['m_by'];
		echo "<script>jQuery('#CollapsiblePanel1').css('display','block');</script>";
		$row_for_name=mysql_fetch_array(mysql_query("select first_name,last_name from user where id_no='$m_by'"));
		$name=$row_for_name['first_name']." ".$row_for_name['last_name'];	
		$row_for_message=mysql_fetch_array(mysql_query("select message from chat where m_by='$m_by' and m_to='$memid' order by time desc limit 1"));	
		$message=$row_for_message['message'];
echo "<a href='index.php?x=".$m_by."'><p><font size='+1' color='white'>".$name."</a></font><br>".$message."<p>";
	}
	
}

?>