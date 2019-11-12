<?php  session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validateName()
{
	var name = document.getElementById("txtFullName").value;
	if((name == "")||(name == null))
	{
		alert("Please enter your name");
		return false;
	}
	return true;
}
function validateNickName()
{
	var name = document.getElementById("txtNickName").value;
	if((name == "")||(name == null))
	{
		alert("Please enter a nick name");
		return false;
	}
	return true;
}
function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at = email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	
	if((at < 2)||(dt-at < 2)||(len-dt < 2))
	{
		alert("Please enter a valid email address");
		return false;
	}
	return true;
}
function validatePassword()
{
	var pwd = document.getElementById("txtPassword").value;
	var cpwd = document.getElementById("txtConfirmPassword").value;
	if((pwd.length < 5)||( pwd != cpwd))
	{
		alert("Please enter a correct Password and enter the to Confirm password");
		return false;
	}
return true;
}
function Validate()
{
	if(validateName()&& validateNickName()&& validateEmail()&&validatePassword())
	{
		alert("Registration is completed");
	}
	else
	{
		event.preventDefault();
	}
}
</script>


<title>Star gadgets</title>
	
	<link rel="stylesheet" type="text/css" href="reg.css">
	<style type="text/css">
	body {
	background-color: white;
	
}
    body,td,th {
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 16px;
}
    </style>
<meta charset="utf-8">
</head>
<body>
	
	<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
					<li><a href="sign1.php">Sign In</a></li>
		    	  <li><a href="register1.php">Create an Account</a></li>
					<li><a href="#">Phone:(+94) 0112-372-672</a></li>
					
				</ul>
			</div>

			<div class="site-search">
				<form method="get" action="../New folder/ho.html">
				  
					<input type="search" name="search-box" placeholder="search....">
					<button type="submit"></button> 
				</form>
			</div>
		</div>
		<span class="logo"></span>

		<header class="clearfix"><img src="img/logo.png" align="left" alt="logo">
			<div class="logo"></div> 
			

			<div class="socialmedia">
				<ul>
					<li><a href="https://twitter.com/?lang=en"><img src="img/twitter.png"></i></a></li>
					<li><a href="https://www.facebook.com/"><img src="img/facebook.png"></i></a></li>
					<li><a href="https://www.instagram.com/?hl=en"><img src="img/instagram (2).png"></i></a></li>
					<li><a href="https://www.google.com/earth/"><img src="img/periscope.png"></i></a></li>
					<li><a href="#"><img src="img/shopping-cart.png"</i></a></li>
				</ul>
			</div> 
</header>
       
       <ul class="nav"
         <li> <a href="home1.php">Home</a></li>
         <li> <a href="#">Most popular</a></li>
         <li> <a href="#">Mobile Phones</a></li>
         <li> <a href="#">Tech Gadgets</a></li>
         <li> <a href="gaming1.php">Gaming</a></li>
         <li> <a href="about.php">About Us</a></li>
         </ul>

<div class="Registerbox">
<img src="img/account.png" class="avatarr">
		<h1>Create an Account</h1>
	<form id="form1" name="form1" method="post" action="adduser1.php">
		
		<label for="txtfirst_name"></label>
		<input type="text" name="txtfirst_name" placeholder=" First name" id="txtfirst_name">
		
		<label for="txtuser_name"> </label>
		<input type="text" name="txtuser_name" placeholder=" Username" id="txtuser_name">
		
        <label for="txtemail"> </label>
		<input type="email" name="txtemail" placeholder=" Email" id="txtemail">
		
		<label for="txtpassword"> </label>
		<input type="password" name="txtpassword" placeholder=" Password" id="txtpassword">
		
        <label for="txtcon_pw"> </label>
		<input type="password" name="txtcon_pw" placeholder=" confirm password" id="txtcon_pw">
		
		
		
		
		<input type="submit" name="btnSubmit" id="btnSubmit" value="Register" onclick="Validate()" />
		
		
		
		
		
	</form>
	
	
	</body>
</html>



