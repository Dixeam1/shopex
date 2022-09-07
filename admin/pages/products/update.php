<?php 
include '../conn.php';
include '../function.php';
$id =$_GET['id'];


if(isset($_POST['submit']))
{
	$data = [

		'name' => $_POST['name'],
		'gmail' => $_POST['gmail'],
		'pass' => $_POST['pass'],
		'address' => $_POST['address'],
		'phone' => $_POST['phone']

	];
	
	update("product", $data , $id);	
	header('Location: index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style type="text/css">
		body{
			background: transparent;
		}
	</style>

</head> 
<body> 
	<div class="container w-50"> <h1 class="text-center mt-5">Update Data</h1> 
		<?php  
		$result = select("data");
		
		// $excute = mysqli_fetch_all($result, MYSQLI_ASSOC); 
		foreach ($result as $key => $res) {
				// print_r($value);

			?>


			<div class="">
				<h2>Update Data</h2>
				<form method="post">
					<div class="user-box">
						<input type="text" name="name" value="<?php echo $res['name'];?>" required="">
						<label>Username</label>
					</div>
					<div class="user-box">
						<input type="Gmail" name="gmail" value="<?php echo $res['gmail'];?>" required="">
						<label>Gmail</label>
					</div>
					<div class="user-box">
						<input type="password" name="pass" value="<?php echo $res['pass'];?>" required="">
						<label>Password</label>
					</div>
					<div class="user-box">
						<input type="text" name="date" value="<?php echo $res['address'];?>" required="">
						<label>Address</label>
					</div>
					<div class="user-box">
						<input type="phone" name="phone" value="<?php echo $res['phone'];?>" required="">
						<label>Phone no</label>
					</div>
					<button name="submit" class="btn" type="submit">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						Submit
					</button>
				</form>
			</div>
		<?php } ?>



	</body>
	</html> 