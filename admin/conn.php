<?php  
	$servername = "localhost";	
	$username = "root";
	$password = "";
	$dbname = "new_ecommerece";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn -> connect_error) {
		die('Your connction failed:'.$conn -> connect_error);
	}
	
	
?>