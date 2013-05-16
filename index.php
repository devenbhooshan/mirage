<?php

session_start();
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
<!--Chat Area Starts Here-->	
  <div id="chat_area">
        <?php
		     
             if(isset($_SESSION['SESS_MEMBER_NAME'])&&array_key_exists('x',$_GET)){
        
        		echo "<div id=\"chat\"  class=\"chat\"></div>";
				echo "<form id=\"adduserform\" name=\"adduserform\" action='javascript:addpost()' >
            	<input type=\"text\" id=\"name\" name=\"name\" class=\"textarea\" style=\"margin-top:5%\"  />
            	</form><br  />";
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

//startTimer();//session_expire
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