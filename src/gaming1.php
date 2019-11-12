<?php  session_start();
include("db.php");

$action = isset($_GET['action'])?$_GET['action']:"";

if(isset($_POST['add'])) {
	
	//Finding the product by code
	$query = "SELECT * FROM products WHERE sku=:sku";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('sku', $_POST['sku']);
	$stmt->execute();
	$product = $stmt->fetch();
	
	$currentQty = $_SESSION['products'][$_POST['sku']]['qty']+1; //Incrementing the product qty in cart
	$_SESSION['products'][$_POST['sku']] =array('qty'=>$currentQty,'name'=>$product['name'],'image'=>$product['image'],'price'=>$product['price']);
	$product='';
	header("Location:cart.php");
}

 ?>
<!doctype html>
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
                
                <?php 
				if(!isset($_SESSION["UserName"])){
					$val='<li><a href="sign1.php">Signin</a></li>
		    	  <li><a href="register1.php">Create an Account</a></li>';
					echo $val;
				}else{
				$val2=	'<li><a >'.$_SESSION["UserName"].'</a></li>
		    	  <li><a href="logout.php">Signout</a></li>';
				  echo $val2;
				} ?>
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
					<li><a href="https://www.google.com/earth/"><img src="img/icons8-account-32.png"></i></a></li>
					<li><a href="cart.php"><img src="img/shopping-cart.png"</i></a></li>
				</ul>
			</div> 
</header>
       
        <ul class="nav">
         <li> <a href="home1.php">Home</a></li>
         <li> <a href="#">Most popular</a></li>
         <li> <a href="mobile.html">Mobile Phones</a></li>
         <li> <a href="#">Tech Gadgets</a></li>
         <li> <a style="color:blue !important;" href="gaming1.php">Gaming</a></li>
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



<div class="product">
		<div class="container">
			<div class="product_section_title"></div> <h1>LATEST ARRIVALS</h1></div> 
<table>

<?php 
$sql="SELECT * FROM products";
$result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result) > 0){
	 $count=0;
	 $img=1;
	 echo '<tr>';
while($row=mysqli_fetch_array($result)){
			$val='<td>	
<form method="post" action="cart.php?action=add&id='.$row["sku"].'">			
						<div class="product_one">
							<div class="product_img">
							  <img src="img/'.$img.'.jpg">
							</div>
							<div class="product_text">
							<h4> '.$row['name'].'
							</h4> <i>'.$row['type'].'</i>
								
							</div>
							<div class="product_price">
							<div class="price">$'.$row['price'].'</div>
							</div>
							<div class="button">
								            <form method="post" action="cart.php?action=addcart">

								<button type="submit"  name="add_to_cart"  class="btn btn-warning"><img src="img/shopping-cart.png"></button>
								
								
                               <input type="hidden" name="sku" value="'.$row['sku'].'">
                               <input type="hidden" name="hidden_name" value="'.$row['name'].'" />  
                               <input type="hidden" name="hidden_price" value="'.$row['price'].'" />  
							   <input type="hidden" name="hidden_qty" value="1" />  

						  </div>
						</div>
						</form>
				</td>';
				echo $val;
									$count++;
							$img++;
							if ($count ==4){
							echo "</tr><tr>";
									}
								}
			
	}
 ?>
	</table>
	</div>
		
        
 <div class="footer-main-div">
 

 
<div class="footer-menu-one">
	<ul>
		<li><a href="#">Home</a></li>
           <li><a href="#">About us</a></li>
           <li><a href="#">Services</a></li>
           <li><a href="#">Products</a></li>
           <li><a href="#">Contact us</a></li>
 	</ul>
</div>
 
<div class="footer-menu-two">
	<ul>
		<li><a href="#">Blog</a></li>
           <li><a href="#">News</a></li>
           <li><a href="#">Gallery</a></li>
           <li><a href="#">Media</a></li>
           
 	</ul>
</div>
 
 
</div>
 
<div class="footer-bottom">
	<p>Design by: <a href="#">Learning Tutorial Point</a></p>
</div>
		

</body>
</html>
