
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/javascript.js" type="text/javascript"></script>
<?php


session_start();
include("database.php");
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


function check_status($id1,$id2){
	if($id1==0||$id2==0){
	  return 0;
	 // not in session	 
	}
	else if(return_status($id1,$id2)==1){
		return 1;
		//friend already
	}
	else if(return_status($id2,$id1)==1){
		return 1;
		//friend already
	}
	
	else if(return_status($id1,$id2)==0){
		return 2;
		// friend request recieved;
	}
	else if(return_status($id2,$id1)==0){
		return 3;
		// friend request send
	}
	else {
		return 4;
		 // no previous connections
	}

}
function return_status($id1,$id2){

	$query_for_checking_status=mysql_query("select status from friend_list where (m_by='$id1' and m_to='$id2')  limit 1");
	if(mysql_num_rows($query_for_checking_status)>0){
	($row_for_checking_status=mysql_fetch_array($query_for_checking_status));
	$status=$row_for_checking_status['status'];
	return $status;
	}
	else return -1;
}


?>