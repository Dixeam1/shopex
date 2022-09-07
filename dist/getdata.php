<?php 
include '../conn.php';

session_start();
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM `customer` WHERE email='$email' AND password='$password'";
  // print_r($sql); die();
  $result = $conn->query($sql); 
  if ($result->num_rows == 0) 
  {
    header("Location: login.php");
  } 
  else
  {
    $_SESSION['email'] = $email;
    header("Location: ../product_summary.php");
  }
}
?>