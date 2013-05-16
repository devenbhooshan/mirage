<?php

//these below functions gives the relationship between two ids.
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

//relationship function ended

?>