<?php

session_start();
$title="Register";
$errors=array();
	include("database.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(0==preg_match("/\S+/",$_POST['first_name'])){
		
		$errors['first_name']="Please enter a first name.";
	}
	
	if(0==preg_match("/\S+/",$_POST['last_name'])){
		
		$errors['last_name']="Please enter a last name.";
	}			
	if(0==preg_match("/.+@.+\..+/",$_POST['email'])){
		$errors['email']="Please provide a valid email.";
	}
	if(0==preg_match("/.{6,}/",$_POST['password'])){
		$errors['password']="The password enterd is incorrect.";
	}
	if(0!=strcmp($_POST['password'],$_POST['password_confirmation'])){
		$errors['password_confirmation']="Password do not match";
	}
	
	if(0==count($errors)){
		
// Sql_ injection OK: 
$first_name=mysql_real_escape_string($_POST['first_name']);
$last_name=mysql_real_escape_string($_POST['last_name']);
$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
$password_confirmation=mysql_real_escape_string($_POST['password_confirmation']);

	$query="insert into user (id_no,first_name,last_name,email,password,no_of_friends,status,confirmation) values ('','$first_name','$last_name','$email','$password','0','0','0')";
$result=mysql_query($query);
if($result){
	//header("location:success.php");
	header("location:index.php");

}
else{

	die("Query failed");
}

}
else{
	header("location:register.php?error=5");	
	
	
}



}





?>


<html>
<head>
<title>Register</title>
<style type="text/css">

#registration_form{
	margin-left:40%;	
}
#labels{
	font-family:"Comic Sans MS", cursive;
	font-weight:normal;
	
}




</style>
</head>
<body>

<form action="register.php" method="post"  id="registration_form" >

<?php     if(isset($_GET['error']))
echo "<h3>Invalid Details</h3>";

?>
<pre>
First Name       <input type="text" name="first_name"/>
Last Name        <input type="text" name="last_name"/>
Email            <input type="text" name="email"/>
Password         <input type="password" name="password"/>
Confirm Password <input type="password" name="password_confirmation"/>

                 <input type="submit" value="Register" />
</pre>
</form>
</body>

</html>
