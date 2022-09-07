<?php
include '../conn.php';
include '../function.php';
if (isset($_POST['submit'])) {
	$data = [

		'name' => $_POST['username'],
		'email' => $_POST['email'],
		'password' => $_POST['password']
];
	$result = insert('customer', $data);
  // print_r($result); die();
	$query = mysqli_query($conn,$result);
	header('location: login.php');
	
}