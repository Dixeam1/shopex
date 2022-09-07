<?php  
include '../conn.php';
include '../function.php';
$id = $_GET['id'];

$del= delete('category', $id);
$query = mysqli_query($conn, $del);
header('location: view_category.php');
?>