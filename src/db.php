<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "star_gadgets";


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} /*
else{
	echo "conencted to : " .$servername, $username, $password;
}

*//*
 $sql = "INSERT INTO comments (usr_name, user_email, tp_number,user_note)
        VALUES ('jani','a','119','ado')";
	 
// Create database
if ($conn->query($sql) === TRUE) {
    echo "inserted";
  }
  else {
    echo "error: " . $conn->error;
}*/

?>