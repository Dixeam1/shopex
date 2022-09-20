<?php
include "conn.php";
include "function.php";
session_start();

if (isset($_POST['addToCart'])) {
			
		$pro_id = $_POST['pro_id']; 	
		$user_id = $_SESSION['user_id']; 
		$data = [
			"p_id" => $pro_id,
			"color" => $color,
			"qty" => $quantity,
			"userid" => $user_id

		];	
		


	$query = "SELECT * FROM `wishlist` WHERE p_id='$pro_id'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0)
	{
		// echo "This Product Already Exist.";
		header("Location: product.php?id=".$pro_id."&Msg=Hello");
	}
	else
	{
		$result = insert("wishlist", $data);
		echo $result;   die();
		$res = mysqli_query($conn, $result);

		header("Location: wishlist.php");

	}
} 
?>