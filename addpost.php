<?php
session_start();
require('database.php');
//include('core_functions.php');
$id;
$message=$_POST['post'];
//$message=text_to_html($_POST['post']);
if(array_key_exists('x',$_GET)&& $_GET['x']!='-1'){
				$id=$_GET['x'];
}
else $id=$_SESSION['SESS_MEMBER_ID'];;
	
$user=$_SESSION['SESS_MEMBER_ID'];
$query="insert into comment(id,m_by,m_to,message) values('','$user','$id','$message')";
mysql_query($query);

?>