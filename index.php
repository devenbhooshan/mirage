<?php
session_start();
include('core_functions.php');
require('database.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>

<?php
if(isset($_SESSION['SESS_MEMBER_ID'])) echo $_SESSION['SESS_MEMBER_NAME'];
else echo "Mirage";
?>
</title>
<link rel="stylesheet" type="text/css" href="css/style.css"  />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="js/jquery.js"></script>
<script src="js/javascript.js"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />        
</head>
<!--Body Starts Here-->
<body >
<?php if(isset($_SESSION['SESS_MEMBER_ID'])) echo "<div id='chat_notifications'></div>"; ?>
<!--Header Starts Here-->
<div id="header" >
<?php     

	 if(isset($_GET['error'])) echo "<h3>Email_id/Password Incorrect</h3>";
	 if(isset($_SESSION['SESS_MEMBER_NAME'])){
		//include("check_login_status.php");
		echo $_SESSION['SESS_MEMBER_NAME'];
		echo "<br /><a href=\"logout.php\">Logout</a>";
	}
	 else echo "
     <form action=\"login.php\"  method=\"post\"  >
 		Email Id <input type=\"text\" name=\"user_email\"  />    Password <input type=\"password\" name=\"user_password\"  />
		<input type=\"submit\" value=\"Log In\"/>&nbsp;&nbsp;Or&nbsp;&nbsp;<a href=\"register.php\">Register</a></form>";
?>
</div>

<!--Main Starts Here-->
<div id="main">

<!--Post area starts here-->
<div id="post_area">
<?php
if(isset($_SESSION['SESS_MEMBER_ID'])&& !array_key_exists('x',$_GET)){
		     
        
     echo '<form id="postcomment" name = "postcomment" action="javascript:postcomment()">
     <input type ="text" name="post" id="post" class="postarea" style="margin-top:1%;margin-left:1%;margin-bottom:1%" />
     </form>' ;
}

?>
<?php
$query = "SELECT * FROM friend_list";
$query_for_checking_friend_status = mysql_query($query);
$query = "SELECT * FROM comment";
$query_for_getting_messages = mysql_query($query);
$array_containing_friend_status = mysql_fetch_array($query_for_checking_friend_status);


//$array_containing_messages = mysql_fetch_array($query_for_getting_messages);

while($array_containing_messages = mysql_fetch_array($query_for_getting_messages)){
if(isset($_SESSION['SESS_MEMBER_ID'])&&isset($array_containing_messages['m_by'])){
	$a = $array_containing_messages['m_by'];
	$b = $_SESSION['SESS_MEMBER_ID'];
	$query = "SELECT * FROM friend_list WHERE m_by = '$a' && m_to = '$b'";
	$query_for_checking = mysql_query($query);
	$array_status = mysql_fetch_array($query_for_checking);
	$a1 = $array_containing_messages['m_by'];
	$b1 = $_SESSION['SESS_MEMBER_ID'];
	$query1 = "SELECT * FROM friend_list WHERE m_by = '$b' && m_to = '$a'";
	$query_for_checking1 = mysql_query($query1);
	$array_status1 = mysql_fetch_array($query_for_checking1);

	if($array_status['status']==1){
		
		echo"{$array_containing_messages['message']}";
		echo '<form>
		<input type= "text" name="commentor_box" id="commentor_box">		</form>';
		}
	if($array_status1['status']==1){
		
		echo"{$array_containing_messages['message']}";
		echo '<form>
		<input type= "text" name="commentor_box" id="commentor_box">		</form>';

		}
		
}
if($_SESSION['SESS_MEMBER_ID']==$array_containing_messages['m_by']){
	
	echo "{$array_containing_messages['message']}";
	echo '<form>
		<input type= "text" name="commentor_box" id="commentor_box">		</form>';

	}
}
?>
</div>

<!--Post area ends here-->
<!--Chat Area Starts Here-->	
  <div id="chat_area">
        <?php
		     
             if(isset($_SESSION['SESS_MEMBER_NAME'])&&array_key_exists('x',$_GET)&&$_GET['x']!=$_SESSION['SESS_MEMBER_ID']){
				 
				 $id=$_GET['x'];
				 $query_for_checking_the_existence_of_id=mysql_query("select first_name from user where id_no='$id'");
				 
        		//if(mysql_num_rows($query_for_checking_the_existence_of_id)>0){
        		echo "<div id=\"chat\"  class=\"chat\"></div>";
				echo "<form id=\"adduserform\" name=\"adduserform\" action='javascript:addpost()' >
            	<input type=\"text\" id=\"name\" name=\"name\" class=\"textarea\" style=\"margin-top:5%\"  />
            	</form><br  />";
				// }
			 }
		?>
 
   </div><!--Chat Area Ends Here-->
	
 	<?php
		
		if(isset($_SESSION['SESS_MEMBER_ID']))	
		echo "<div id='right_panel'>
						<div id='friend_list'></div>
						<div id='friend_request_list'></div>
						<div id='friend_suggestion_list'></div>
			  </div> 
			  <div id='left_panel'></div>";
		
	?>

</div>
<!-- main ends here-->

<!-- Foooter Starts Here-->
<div id="footer" >
</div>
<!-- Footer ends here-->
<script>
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
</script>
</body>
<!-- Body ends here-->
<!-- Scripts Start here here-->

<?php
if(isset($_SESSION['SESS_MEMBER_ID'])){
?>
<script>


if(window.location.search){
if (url.match("x").length > 0) {
doTimer();// check_new chat timer
}
}

startTimer();//session_expire
startTimer1();//chatlist timer
doTimer2();// friends_suggestion_list
startchatnotitimer();//chat notification timer
</script>

<?php	

}
?>
<!-- Scripts  ends here-->
</html>
<!-- HTML  ends here-->