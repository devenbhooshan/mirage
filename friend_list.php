<?php
session_start();
include("database.php");
if(isset($_SESSION['SESS_MEMBER_ID'])){
	$memid=$_SESSION['SESS_MEMBER_ID'];
	$query_for_friend_list=mysql_query("select m_by,m_to from friend_list where (m_by='$memid' or m_to='$memid') and status='1'");
	echo "<font color='#FFFFFF'><h3>Friend List</h3></font><hr>";
	if(mysql_num_rows($query_for_friend_list)>0){

		while($rows_for_friend_list=mysql_fetch_array($query_for_friend_list)){
			$m_by=$rows_for_friend_list['m_by'];
			$m_to=$rows_for_friend_list['m_to'];
			if($m_to==$memid){
				$query_for_names_friend_list=mysql_query("select first_name,last_name from user where id_no='$m_by'");
				if(mysql_num_rows($query_for_names_friend_list)>0){
					$row_for_names_friend_list=mysql_fetch_array($query_for_names_friend_list);
					$name=$row_for_names_friend_list['first_name']."".$row_for_names_friend_list['last_name'];
					echo "<a href='index.php?x=".$m_by."'><p><font size='+1' color='white'>".$name."</a></font><br></p>";	
					
				}
				
			}
			else {
				$query_for_names_friend_list=mysql_query("select first_name,last_name from user where id_no='$m_to'");
				if(mysql_num_rows($query_for_names_friend_list)>0){
					$row_for_names_friend_list=mysql_fetch_array($query_for_names_friend_list);
					$name=$row_for_names_friend_list['first_name']."".$row_for_names_friend_list['last_name'];
					echo "<a href='index.php?x=".$m_to."'><p><font size='+1' color='white'>".$name."</a></font><br></p>";	
					
				}
				
			}
			
		}
		
	}
	else {
		echo "No friends";
		/*echo "No friends .<br>;
		 Friends Suggestion <br>
		<div id='user_list'>
		</div>
		";
		
		?>
        
		<script>
			$.get('users_list.php', function(data){
		$('#user_list').html(data);
		});
		</script>
		<?php
	*/
	}
	
	
}
else {
	echo "An error occured.";
	
}


?>