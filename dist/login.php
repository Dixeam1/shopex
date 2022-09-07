<?php
include '../function.php';
include '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> login &amp; register </title>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container">

    <!--Login-->
    <div id="loginForm" class="card mr-auto ml-auto mt-4 p-4">
      <h2 class="text-secondary text-center">Login</h2>
      <form class="p-4 form" method="POST" action="getdata.php">
        <div class="form-group">
          <label for="username">
            Email
          </label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">
            Password
          </label>
          <input type="password" name="password" class="form-control">
        </div>

        <br>
        <input type="submit" value="Login" name="submit" class="btn btn-primary btn-block">
      </form>
      <br>
      <p class="text-right">Don't have an account? <a href="javascript:showRegistration()">Register here.</a></p>
    </div>

    <!--Registration-->
    <div id="registrationForm" class="card mr-auto ml-auto mt-4 p-4 hidden">
      <h2 class="text-secondary text-center">Register</h2>
      <form class="p-4 form" method="POST" action="storedata.php">

        <div class="form-group">
          <label for="username">
            Username
          </label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">
            Email
          </label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">
            Password
          </label>
          <input type="text" name="password" class="form-control">
        </div>
        <br>
        <input type="submit" value="Register" name="submit" class="btn btn-primary btn-block">
      </form>
      <br>
      <p class="text-right">Already have an account? <a href="javascript:showLogin()">Login here.</a></p>
    </div>

  </div>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>