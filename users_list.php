
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/javascript.js" type="text/javascript"></script>
<?php


session_start();
include("database.php");
include("core_functions.php");
$memid;
if(isset($_SESSION['SESS_MEMBER_ID'])){
	$memid=$_SESSION['SESS_MEMBER_ID'];
}
else $memid=0;
$query_for_list_of_users=mysql_query("select first_name,last_name,id_no from user where id_no!='$memid'");
echo "
<table>
<tbody>
";
if(mysql_num_rows($query_for_list_of_users)>0){
while($rows_for_list_of_users=mysql_fetch_array($query_for_list_of_users)){
	$first_name=$rows_for_list_of_users['first_name'];
	$last_name=$rows_for_list_of_users['last_name'];
	$id_no=$rows_for_list_of_users['id_no'];	
	$name=$first_name." ".$last_name;
	echo "<tr><td><a href='index.php?x=".$id_no."'>".$name."</a></td>";
	if(check_status($id_no,$memid)==1){
		echo "<td>Friend</td></tr>";
	}
	else if(check_status($id_no,$memid)==2){
	echo "<td><button id='friend_request' onclick='javascript:request_send_accept_response(".$memid.",".$id_no.",2);'>Accept Friend Request</button></td></tr>";
	}
	else if(check_status($id_no,$memid)==3){
			echo "<td><button id='friend_request' onclick='javascript:request_send_accept_response(".$memid.",".$id_no.",3);'>Friend Request Sent</button></td></tr>";
		}
	else if(check_status($id_no,$memid)==4){		
			echo "<td><button id='friend_request' onclick='javascript:request_send_accept_response(".$memid.",".$id_no.",4);'>Send friend Request</button></td></tr>";
	}
	else if(check_status($id_no,$memid)==0){
		echo "</tr>";
	}

	
}
echo "</tbody></table>";
}


?>