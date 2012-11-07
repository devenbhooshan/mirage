<?php
	include("database.php");
	$query="select * from user where status='1'";
	$result=mysql_query($query);
	
	echo "<h3 style='color:white'>Online people</h3>";
	echo "<br />";
	$test=0;
	while($row=mysql_fetch_array($result)){
		$test=1;
	
		echo "<font color='#FFF' >    ".$row['first_name']."   ".$row['last_name'];
		
		// for session destroying
		/*
		$name=$row['first_name']."  ".$row['last_name'];
		$first_name=$row['first_name'];
		$last_name=$row['last_name'];
		$query="select * from chat where user='$name' order by time DESC   ";
		$resultt=mysql_query($query) or die(mysql_error());
		//while($roww=mysql_fetch_array($resultt)){
			$roww=mysql_fetch_array($resultt);
			$time=$roww['time'];
			$_SESSION=array();
			if((time()-$time)>=300){
			
				mysql_query("update user set status='0' where first_name='$first_name' AND last_name='$last_name' ");
				foreach($_SESSION as $key => $val)
{
echo "devev";
    if ($key == '$name')
    {
echo "dev";
      unset($_SESSION[$key]);
	  break;

    }

}

				
			
			
			
			
		}
*/		
		
		echo "<br />";
	
		
	}
	
	if($test==0)
	echo "No user Online";
	
	
    
?>