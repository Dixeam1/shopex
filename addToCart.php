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
			"userid" => $user_id

		];	
		// $result = insert("cart", $data);
		// // print_r($result);   die();
		// $res = mysqli_query($conn, $result);

		// header("Location: index.php");


	$query = "SELECT * FROM `cart` WHERE p_id='$pro_id'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0)
	{
		// echo "This Product Already Exist.";
		header("Location: product_details.php?id=".$pro_id."&Msg=Hello");
	}
	else
	{
		$result = insert("cart", $data);
		// print_r($result);   die();
		$res = mysqli_query($conn, $result);

		header("Location: index.php");

	}
} 
?>