<?php



	
$first_name = $_POST["txtfirst_name"];
$user_name = $_POST["txtuser_name"];
$email = $_POST["txtemail"];
$password = $_POST["txtpassword"];
$con_pw = $_POST["txtcon_pw"];



$con = mysqli_connect("localhost","root","","star_gadgets");
	if(!$con)
	{
		die ("Can't connect to the database");
	}
	
$sql = "INSERT INTO `star_gadgets`.`user`(`first_name`, `user_name`, `email`, `password`, `con_pw`) 
		VALUES ('".$first_name."','".$user_name."','".$email."','".$password."','".$con_pw."')";
mysqli_query($con,$sql);



$sql ="INSERT INTO `star_gadgets`.`login`(`email`, `password`) VALUES ('".$email."','".$password."')";	
mysqli_query($con,$sql);	
	
	
mysqli_close($con);
	
header('Location:sign1.php');
	
?>
