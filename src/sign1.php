<?php  session_start();
include("db.php");

 ?>
<!doctype html>
<html>
<head>

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
	<h1>Log In</h1>
	<form id="form1" name="form1" method="post" action="sign1.php">
		
		
		
		<label for="uname"></label>
		<input type="text" name="txtuname" placeholder=" Email">
		
		
		
		<label for="psw"></label>
		<input type="password" name="txtpassword" placeholder=" Password" name="txtpassword" required>
		
		 <p> <?php
	if(isset($_POST["btnsubmit"])){
		$un = $_POST["txtuname"];
		$pw = $_POST["txtpassword"];
		$valid= false;
		
			

		$sql = "Select 	* from login where email='".$un."' and password='".$pw."'";

		$result = mysqli_query($con,$sql);

		if(mysqli_num_rows($result) > 0)
		
			{
				$valid = true;
				$_SESSION["UserName"]= $un;

			}else{
				$valid = false;
			
		mysqli_close($con);}
				
		if($valid){
			header('Location:home1.php');
		}else{
	    echo "invalid User Credentials";
		}
	 }
	  ?>
	  </p>
		
		
		
		<input type="submit" name="btnsubmit" value="Login">
        <a href="#"> forgot your password</a>
		<a href="#">Create an account</a>
		
		
		
		
		
	</form>
	
	
	</body>
</html>



