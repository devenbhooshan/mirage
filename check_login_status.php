<?php
$memid=$_SESSION['SESS_MEMBER_ID'];


		$query_for_login_status=mysql_query("select status from login where id_no='$memid' order by login_time desc limit 1");
//echo "select status from login where id_no='$memid' order by login_time desc limit 1";
		if(mysql_num_rows($query_for_login_status)>0){
			$row_for_login_status=mysql_fetch_array($query_for_login_status);
			if($row_for_login_status['status']==0){
				header("location:logout.php?exp=1");
			}
			
		}
		
		?>