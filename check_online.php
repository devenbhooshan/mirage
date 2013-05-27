<?php
	session_start();
	if(isset($_SESSION['SESS_MEMBER_ID']))
	$memid=$_SESSION['SESS_MEMBER_ID'];
	else $memid=0;
	include("database.php");

	$query="select id_no from login where status='1' and id_no!=$memid and (id_no  in ( select m_by from friend_list where (m_by='$memid' or m_to='$memid') and status='1') or id_no in  ( select m_to from friend_list where (m_by='$memid' or m_to='$memid') and status='1'))";
//echo $query;
	$result=mysql_query($query);
	
	echo "<h3 style='color:white'>Online people</h3>";
	echo "<hr>";
	$test=0;
	while($row=mysql_fetch_array($result)){
		
		$test=1;
		$id_no=$row['id_no'];
		
		$query_for_online_users_name=mysql_query("select first_name,last_name from user where id_no='$id_no'");
		$online_users_name_rows=mysql_fetch_array($query_for_online_users_name);

		echo "<a href='index.php?x=".$row['id_no']."'><font color='#FFF' >    ".$online_users_name_rows['first_name']."   ".$online_users_name_rows['last_name']."</font></a>";
		
		echo "<br />";
	
		
	}
	
	if($test==0)
	echo "No other user Online";
	
	
    
?>