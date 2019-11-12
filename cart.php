<?php  session_start();
include("db.php");

 
 $connect = mysqli_connect("localhost", "root", "", "star_gadgets");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["hidden_qty"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["hidden_qty"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 
 
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
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

.table-bordered {
    border: 1px solid #ddd;
}
.footer-main-div{
	width: 100%;
	height: auto;
	margin: auto;
	background: #303;
	padding:30px 0px;


}

.footer-menu-one{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top:25px;
}
.footer-menu-one ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}
.footer-menu-one ul li{
	display: inline-block;
	margin: 0px 15px;
}
.footer-menu-one ul li a{
	font-family: arial;
	font-size:15px;
	font-weight: 600;
	color: #fff;
	letter-spacing: 1px;
	text-transform: uppercase;
}
.footer-menu-one ul li a:hover{
	color: #000;
}
.footer-menu-two{
	width: 100%;
	height: auto;
	margin: auto;
	margin-top:15px;
}
.footer-menu-two ul{
	margin: 0px;
	padding: 0px;
	text-align: center;
}
.footer-menu-two ul li{
	display: inline-block;
	margin: 0px 15px;
}
.footer-menu-two ul li a{
	font-family: arial;
	font-size:14px;
	font-weight: 600;
	color: #fff;
	letter-spacing: 1px;
	text-transform: uppercase;
}
.footer-menu-two ul li a:hover{
	color: #303;
}
.footer-bottom{
	width: 100%;
	height: auto;
    margin: auto;
    background: #303;
    padding: 10px;
}
.footer-bottom p{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: #fff;
	font-weight: 600;
	letter-spacing: 1px;
}
.footer-bottom p a{
	color: #fff;
}
.footer-bottom p a:hover{
	color: #000;
}
.product{
	margin-bottom:20px;
}
</style>
</head>
<body>




<div class="product">
		<div class="container">
			<div class="product_section_title"></div> <h1>Cart</h1></div> 
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered" width="100%">  
                          <tr>  
                               <th width="50">Item Name</th>  
                               <th width="25">Quantity</th>  
                               <th width="25">Price</th>  
                               <th width="25">Total</th>  
                               <th width="55">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td width="50"><?php echo $values["item_name"]; ?></td>  
                               <td style="text-align:center"><?php echo $values["item_quantity"]; ?></td>  
                               <td style="text-align:right">$ <?php echo $values["item_price"]; ?></td>  
                               <td style="text-align:right">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td style="text-align:right"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>
				
				<a href="gaming1.php">Back to shopping</a>
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
 
		

</body>
</html>
