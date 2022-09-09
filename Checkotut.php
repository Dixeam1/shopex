<?php
include 'conn.php';
include 'function.php';


session_start();

if (empty(isset($_SESSION["email"]))) {
	header("Location:dist/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Order Now</title>
	<link rel="stylesheet" href="vendors/css/style.css">

</head>
<body>

	<header>
		<h3>Order Now</h3>
		<a href="dist/logout.php">logout</a href="logout.php">
	</header>

	<main>
		
		<section class="checkout-form">
			<form action="#!" method="get">
				<h6>Contact information</h6>
				<div class="form-control">
					<label for="checkout-email">E-mail</label>
					<div>
						<span class="fa fa-envelope"></span>
						<input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email...">
					</div>
				</div>
				<div class="form-control">
					<label for="checkout-phone">Phone</label>
					<div>
						<span class="fa fa-phone"></span>
						<input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter you phone...">
					</div>
				</div>
				<br>
				<h6>Shipping address</h6>
				<div class="form-control">
					<label for="checkout-name">Full name</label>
					<div>
						<span class="fa fa-user-circle"></span>
						<input type="text" id="checkout-name" name="checkout-name" placeholder="Enter you name...">
					</div>
				</div>
				<div class="form-control">
					<label for="checkout-address">Address</label>
					<div>
						<span class="fa fa-home"></span>
						<input type="text" name="checkout-address" id="checkout-address" placeholder="Your address...">
					</div>
				</div>
				<div class="form-control">
					<label for="checkout-city">City</label>
					<div>
						<span class="fa fa-building"></span>
						<input type="text" name="checkout-city" id="checkout-city" placeholder="Your city...">
					</div>
				</div>
				<div class="form-group">
					<div class="form-control">
						<label for="checkout-country">Country</label>
						<div>
							<span class="fa fa-globe"></span>
							<input type="text" name="checkout-country" id="checkout-country" placeholder="Your country..." list="country-list">
							<datalist id="country-list">
								<option value="Pakistan"></option>
								<option value="USA"></option>
								<option value="Russia"></option>
								<option value="Japan"></option>
								<option value="Egypt"></option>
							</datalist>
						</div>
					</div>
					<div class="form-control">
						<label for="checkout-postal">Postal code</label>
						<div>
							<span class="fa fa-archive"></span>
							<input type="numeric" name="checkout-postal" id="checkout-postal" placeholder="Your postal code...">
						</div>
					</div>
				</div>
				
				<div class="form-control-btn ">
					<button>Order Now</button>
				</div>
			</form>
		</section>

		<section class="checkout-details">
			<div class="checkout-details-inner">
				<div class="checkout-lists">
					<?php
					// $id = $_Get['id'];
					// echo $id; die();
					$result = select("cart");

					$sq = "SELECT * FROM `product` INNER JOIN `cart` ON product.`id` = cart.`id`";
					$q = mysqli_query($conn, $sq);
					// $ql = "SELECT * FROM `cart` WHERE id = '$id'";
					// $result = mysqli_query($conn , $ql);

					$fetch = mysqli_fetch_all($q, MYSQLI_ASSOC);

					$total_bill = 0;
					foreach($fetch as $res){ 
						$total = [];
						$total[] = $res
						['price'] * $res['qty'];
						$total_bill += $res['price'] * $res['qty'];
						?>
						<div class="card">
							<div class="card-image"><img src="" alt=""></div>
							<div class="card-details">
								<div class="card-name">rth<h4></h4><?php echo $res['name']; ?></div>
								<div class="card-price"><h4></h4><?php echo $res['qty']; ?></div>
								<div class="card-price"><h4></h4><?php echo $res['price']; ?></div><div class="card-price"><h4></h4><?php echo $res['color']; ?></div>
								<div class="card-price"><h4></h4><?php echo $total[0]; ?></div>

							</div>
						</div>
					<?php } ?>
				</div>
				<div class="checkout-total">
					<h2>Sub Total</h2>
					<h2>$0</h2>
				</div>
			</div>
		</section>

	</main>

	<footer>

	</footer>
	<!-- partial -->

</body>
</html>
