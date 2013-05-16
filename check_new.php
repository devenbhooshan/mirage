<html>
<body>

<table  id="box">
<tbody>
<?php
session_start();
include("database.php");
$mid=$_SESSION['SESS_MEMBER_ID'];

if(array_key_exists('x',$_GET)){
				$id=$_GET['x'];
				
					$query_for_changing_the_notification_status=mysql_query("update chat_notification_list set status='1' where m_by='$id' and m_to='$mid'");
				$query="select * from chat where (m_to='$id' AND m_by='$mid') or (m_to='$mid' AND m_by='$id') order by  time desc";
				$result=mysql_query($query);

			
if(mysql_num_rows($result)>0){

while($row=mysql_fetch_array($result)){


$mesid=$row['m_by'];
$query_for_name=mysql_query("select first_name from user where id_no='$mesid' limit 1");
if(mysql_num_rows($query_for_name)>0){
	$names=mysql_fetch_array($query_for_name);
	$name=$names['first_name'];
	echo "<tr style='font-size:14px;color:white '><td>&nbsp;&nbsp;".$name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	
}
echo "<td style='font-size:20px;color:silver '>".$row['message']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";	

echo "<td style='font-size:12px;color:silver '>".$row['time']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";

	
}}
}
?>
</tbody>
</body>
</html>
