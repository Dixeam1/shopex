<?php  
include '../conn.php';
include '../function.php';
$id = $_GET['id'];

$del= delete('orders', $id);
$query = mysqli_query($conn, $del);
header('location: payment.php');
?>