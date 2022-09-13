<?php  
include 'conn.php';
include 'function.php';
$id = $_GET['id'];

$del= delete('cart', $id);
$query = mysqli_query($conn, $del);
header('location: cart.php');
?>