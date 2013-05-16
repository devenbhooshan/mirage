<?php
session_start();
include("database.php");
if(isset($_SESSION['SESS_MEMBER_ID'])){
	$memid=$_SESSION['SESS_MEMBER_ID'];
	$query_for_friend_requests=mysql_query("select m_by from friend_list where m_to='$memid' and status='0'");
	echo "<hr><font color='#FFFFFF'><h3>Friend Requests </h3></font>";
	if(mysql_num_rows($query_for_friend_requests)>0){
		?>
		<table>
        <tbody>
        <?php
		while($rows_for_friend_requests=mysql_fetch_array($query_for_friend_requests)){
			$id_no=$rows_for_friend_requests['m_by'];
			$query_for_friend_requests_name=mysql_query("select first_name,last_name from user where id_no='$id_no' limit 1");
			if(mysql_num_rows($query_for_friend_requests_name)>0){
				$row_for_friend_requests_name=mysql_fetch_array($query_for_friend_requests_name);
				$name=$row_for_friend_requests_name['first_name']." ".$row_for_friend_requests_name['last_name'];
				echo "<tr><td><a href='index.php?x=".$id_no."'>".$name."</a></td>";
				echo "<td><button id='friend_request' onclick='javascript:request_send_accept_response(".$memid.",".$id_no.",2);'>Accept Friend Request</button></td></tr>";

				
				
			}
		
			
		}
		?>
        </tbody>
        </table>
        <?php
		
		
	}
		else {
				echo "No friend Request";
				
			}
	
	
}
else {
 echo "Login first"	;
	
}

?>