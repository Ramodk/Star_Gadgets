<?php  session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>

	<title>Star gadgets</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	body {
	background-color:#FFF;
	
}
    body,td,th {
	font-family:Tahoma, Geneva, sans-serif;
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
			<!-- logo -->

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
         <li> <a href="mobile.html">Mobile Phones</a></li>
         <li> <a href="#">Tech Gadgets</a></li>
         <li> <a href="gaming1.php">Gaming</a></li>
         <li> <a href="about.php">About Us</a></li>
         </ul>


<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/beatsby-dr-dre.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/beatsby-dr-dre.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/bose-sounds-sports-wirless.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<center>
<p><h1>ABOUT US</h1>ABOUT US
	<p>The <b>Star Gadget</b>’s mission is to make your life a little easier and certainly much more fun.
	Our aim is to brighten your day without breaking the bank.</p>

<p>Whether you are a gadget geek yourself, or searching for the best gift ever, we are here to give you inspiration.</p> 

<p>We manage our operation from our offices in Prague and Manila. From here we look after your orders and inquiries and endeavor to give you the very best service possible.</p> 

<p>We constantly strive to bring you, our valued customer, the best, and most well priced products the world has on offer. Though our focus is on great prices, we never compromise on quality and pride ourselves on offering FREE Shipping to most countries around the world. </p>

If you are as passionate about gadgets as we are, you will love what the Star Gadget Store has to offer.</p></center>
<body>
<form name="htmlform" method="post" action="html_form_send.php">
<table width="450px" align="center">
</tr>
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit"></td>
</tr>
</table>
</form>

<footer>
			

		<div class="copyrights">
			<div class="left">
				Copyrights &copy; STARGADGETS 2018 All Rights Reserved
			</div>
			<div class="right">
				Website by: The Originals
			</div>
</div> 
	</div> 				

</body>
</html>
 
