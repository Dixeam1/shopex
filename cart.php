<?php 
include 'conn.php';
session_start();
if (empty(isset($_SESSION["email"]))) {
	header("Location: dist/login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<style>
		
	</style>
</head>
<body>
	<?php include 'layout.php'; ?>

	<div class="container-fluid" style="margin-top: 170px; width:1450px">
		<div class="row">
			<div class="col-md-10">
				<table class="table">
					<thead class="">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Image</th>
							<th scope="col">Title</th>
							<th scope="col">Color</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
							<th scope="col">Total</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sr = 1;
						$sql = "SELECT * FROM `product` INNER JOIN `cart` ON product.`id` = cart.`p_id`";
						$sq = mysqli_query($conn, $sql);
						$fetch = mysqli_fetch_all($sq, MYSQLI_ASSOC);
						$result = select('cart');
						$total_bill = 0;

						foreach ($fetch as $res ) {
							$total = [];
							$total[] = (float)$res['price'] * (float)$res['qty'];
							$total_bill += (float)$res['price'] * (float)$res['qty']
							?>
							<tr>
								<th scope="row"><?php echo $sr++; ?></th>
								<td><img class="" style="width: 80px;"  src="themes/images/<?php echo $res['images'];?>" alt=""></td>
								<td><?php echo $res['name']; ?></td>
								<td><?php echo $res['color']; ?></td>
								<td><?php echo $res['qty']; ?></td>
								<td><?php echo $res['price']; ?></td>
								<td><?php echo $total[0]; ?></td>
								<td><a class="a " href="delete.php?id=<?php echo $res['id']?>"><i class=" fas fa-trash-alt text text-danger " style=" font-size: 25px;"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="">
					<a href="special_offer.php" class="my-4 text-white">
						<button class="btn text-white" style="background-color:#ff6a00;">
							BACK TO SHOP
						</button>
					</a>
				</div>
			</div>

			<div class="col-md-2 bg-white border">
				<div class="mt-3 font-weight-bold">
					<span >SUB TOTAL</span><span style="margin-left: 70PX">$<?php echo $total_bill; ?></span>
				</div>
				<div class="mt-3 font-weight-bold ">
					<span >SHIPPING </span><span style="float: right; margin-left: 70PX">$0.00</span>
				</div>
				<div class="mt-3">
					<span>
						EST. TAXES & FEES
					</span><br>
					<span>
						Based on 56789
					</span>
				</div>
				<hr>
				<div class="d-flex justify-content-center">
					<a href="checkotut.php?total=<?php echo $total_bill?>" class="my-4 text-white w-100">
						<button class="btn text-white w-100" style="background-color:#ff6a00;">
							CHECK OUT
						</button>
					</a>
				</div>
				<hr>
				<div class="" style="font-size: 12px;">
					<span class="font-weight-bold">
						Free Pickup 
					</span>
					is available as soon as today More about shipping and pickup.
				</div>
			</div>
		</div>
	</div>
</body>
</html>