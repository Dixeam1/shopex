<?php
	include "conn.php";
	include "function.php";
	session_start();

	if (isset($_POST['addToCart'])) {
		$quantity = $_POST['quantity']; 
		$color = $_POST['color'];	
		$pro_id = $_POST['pro_id']; 	
		$user_id = $_SESSION['user_id']; 
		$data = [
			"p_id" => $pro_id,
			"color" => $color,
			"qty" => $quantity,
			"user_id" => $user_id
		
		];	
		$result = insert("cart", $data);
		// print_r($result);   die();
		$res = mysqli_query($conn, $result);

		// header("Location: index.php");
	} 
?>