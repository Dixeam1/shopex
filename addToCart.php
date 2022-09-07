<?php
	include "conn.php";
	include "function.php";

	if (isset($_POST['addToCart'])) {
		$quantity = $_POST['quantity']; 	
		$pro_id = $_POST['pro_id']; 	
		$user_id = $_POST['user_id']; 
		$data = [
			"p_id" => $pro_id,
			"qty" => $quantity,
			"user_id" => $user_id,
			// "status" => 0
		];	
		$result = insert("cart", $data);
		echo $result; die();
		$res = mysqli_query($conn, $result);

		header("Location: index.php");
	} 
?>