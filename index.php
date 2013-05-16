<?php
include("session_expire.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mirage</title>
<link rel="stylesheet" type="text/css" href="css/style.css"  />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js"></script>
<script src="js/javascript.js"></script>

<script type="text/javascript">

var url = window.location.search;
x=0;
if(window.location.search){
if (url.match("x").length > 0) {
	x=getUrlVars();
}
if(url.match("session_expire").length>0){
alert("Session Expired");
	
}
}


            function adduser()
            {
				
                var data=$("#adduserform").serialize();
                $.ajax({
                    type: "POST",
                    url: "add.php?x="+x[x[0]],
                    data: data,
                    dataType: "html",
                });
            }
        </script>
        
        
</head>
<body bgcolor="#000000">
<div id="CollapsiblePanel1" class="CollapsiblePanel" style="display:none">
  <div class="CollapsiblePanelTab" tabindex="0">New Messages</div>
  <div class="CollapsiblePanelContent">
  
  </div>

</div>
<div id="header" >
     <?php     
	 session_start();
	 
	 if(isset($_GET['error']))
	echo "<h3>Email_id/Password Incorrect</h3>";
	
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


<div id="main"  >
	
  <div id="chat_area">
        <?php
		     
             if(isset($_SESSION['SESS_MEMBER_NAME'])){
        
        		echo "<div id=\"chat\"  class=\"chat\"></div>";

    	echo "<form id=\"adduserform\" name=\"adduserform\" action='javascript:void()' >
            
                <input type=\"text\" id=\"name\" name=\"name\" class=\"textarea\" style=\"margin-top:5%\"  />
            
        </form><br  />
        <button onclick=\"javascript:adduser();\" id=\"newUser\"  style=\"margin-left:30%\">Send</button> ";
			 }
		?>
 
  <script type="text/javascript">
</script>
    	
	</div>
	
    <?php
    
	echo "<div id=\"side_panel\"></div> ";
	if(isset($_SESSION['SESS_MEMBER_ID'])){
	echo "<div id='left_panel'></div>";
		
	}
	?>

</div>



<div id="footer" >
</div>

</body>
<script language="javascript">
var c=0;
var c2=0;
var t;
var t2;
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
t=setTimeout("timedCount()",50);
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
$.get('check_online.php', function(data){
$('#side_panel').html(data);
});
t2=setTimeout("timedCount2()",10000);
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
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
</script>

</html>
