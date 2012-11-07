<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mirage</title>
<link rel="stylesheet" type="text/css" href="css/style.css"  />


<script src="js/jquery.js"></script>

<script type="text/javascript">

            function adduser()
            {
                var data=$("#adduserform").serialize();
                $.ajax({
                    type: "POST",
                    url: "add.php",
                    data: data,
                    dataType: "html",
                });
            }
        </script>
</head>
<body bgcolor="#000000">

<div id="header" >
     <?php     
	 session_start();
	 
	 if(isset($_GET['error']))
	echo "<h3>Email_id/Password Incorrect</h3>";
	
	if(isset($_SESSION['SESS_MEMBER_ID'])){
		echo $_SESSION['SESS_MEMBER_ID'];
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
		

		
		
	
        
             if(isset($_SESSION['SESS_MEMBER_ID'])){
        
        		echo "<div id=\"chat\"  class=\"chat\"></div>";

    	echo "<form id=\"adduserform\" name=\"adduserform\" >
            
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

function timedCount()
{
$.get('check_new.php', function(data){
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
doTimer();




function timedCount2()
{
$.get('check_online.php', function(data){
$('#side_panel').html(data);
});
t2=setTimeout("timedCount2()",50);
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
</script>

</html>
