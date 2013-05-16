<?php
include("session_expire.php");
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
		include("check_login_status.php");
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
		     
             if(isset($_SESSION['SESS_MEMBER_NAME'])){
        
        		echo "<div id=\"chat\"  class=\"chat\"></div>";
				echo "<form id=\"adduserform\" name=\"adduserform\" action='javascript:addpost()' >
            	<input type=\"text\" id=\"name\" name=\"name\" class=\"textarea\" style=\"margin-top:5%\"  />
            	</form><br  />";
				 }
		?>
 
   </div><!--Chat Area Ends Here-->
	
 	<?php

		if(isset($_SESSION['SESS_MEMBER_ID']))	echo "<div id=\"side_panel\"></div> <div id='left_panel'></div>";
		
	?>

</div>
<!-- main ends here-->

<!-- Foooter Starts Here-->
<div id="footer" >
</div>
<!-- Footer ends here-->

</body>
<!-- Body ends here-->
<!-- Scripts Start here here-->
<script language="javascript">


var timer_is_on=0;
var timer_is_on2=0;

var url = window.location.search;
x=0;
if(window.location.search){
if (url.match("x").length > 0) {
	x=getUrlVars();

}
}
function timedCount()
{
	
$.get('check_new.php?x='+x[x[0]], function(data){
$('#chat').html(data);
});
setTimeout("timedCount()",50);
}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}
if(x!=0)
doTimer();




function timedCount2()
{
$.get('friends_and_suggestion_list.php', function(data){
$('#side_panel').html(data);
});
setTimeout("timedCount2()",10000);
}

function doTimer2()
{
if (!timer_is_on2)
  {
  timer_is_on2=1;
  timedCount2();
  }
}


doTimer2();


startTimer();
startTimer1();
startchatnotitimer();
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
</script>
<!-- Scripts  ends here-->
</html>
<!-- HTML  ends here-->