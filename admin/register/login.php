<?php 
include '../conn.php';

session_start();
if(isset($_POST['submit'])){

  $username = $_POST['usrname'];
  $psw = $_POST['psw'];
  $sql = "SELECT * FROM `user` WHERE username='$username' AND psw='$psw'";
  $result = $conn->query($sql); 
  if ($result->num_rows == 0) 
  {
    header("Location: login.php");
  } 
  else
  {
    $_SESSION['username'] = $username;
    header("Location: ../index.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
  <style>


</style>
</head>
<body>



  <!-- <div class="container">
    <div class="logo">
      <img src="../images/4564.png">
    </div>
    <form action="" method="POST">
      <label for="usrname">Username</label>
      <input type="text" name="usrname">

      <label for="psw">Password</label>
      <input type="password" name="psw">      

      <input type="submit" value="Submit" name="submit">
    </form>
  </div> -->
<div class="module form-module mt-5">
    <div class="tggle">
     
    </div>
    <div class="form">
      <h2>Login to your account</h2>
      <form method="POST">
        <input type="text" name="usrname" placeholder="Username"/>
        <input type="password" name="psw" placeholder="Password"/>
        <button name="submit">Login</button>
      </form>
    </div>

    <div class="cta"><a href="">Forgot your password?</a></div>
  </div>
  
</body>
</html>
