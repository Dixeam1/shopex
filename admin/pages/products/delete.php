<?php  
include '../conn.php';
include '../function.php';
$id = $_GET['id'];

$del= delete('product', $id);
$query = mysqli_query($conn, $del);
header('location: view_products.php');
?>