<?php
session_start();
include("database.php");
include("core_functions.php");
if(isset($_SESSION['SESS_MEMBER_ID'])){
	$memid=$_SESSION['SESS_MEMBER_ID'];

echo "<hr><font color='#FFFFFF'><h3>Suggested Friends </h3></font>";
$query_for_list_of_users=mysql_query("select first_name,last_name,id_no from user where id_no!='$memid'");
$count=0;
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
	

	 if(check_status($id_no,$memid)==4){		
	 $count++;
	 echo "<tr><td><a href='index.php?x=".$id_no."'>".$name."</a></td>";
			echo "<td><button id='friend_request' onclick='javascript:request_send_accept_response(".$memid.",".$id_no.",4);'>Send friend Request</button></td></tr>";
	}

	
}

}
echo "</tbody></table>";
if($count==0)
echo "No suggestions right now";
}
?>