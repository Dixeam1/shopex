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
    $res = mysqli_fetch_assoc($result);
    // echo $res['user_id']; die();
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $res['user_id'];
    header("Location: ../Checkotut.php");
  }
}
?>