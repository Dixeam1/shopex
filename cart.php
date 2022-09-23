	<?php include 'layout.php'; ?>
	<?php
	session_start();
	if (empty(isset($_SESSION["email"]))) {
		header("Location: dist/login.php");
	}

	// if (isset($_POST['submit'])) {
	// 	$data = [
	// 		'qty' => $_POST['qty']
	// 	];
	// 	$result = insert('cart', $data);
	// 	$query = mysqli_query($conn,$result);

	// 	header('Location: cart.php');
	// }

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Cart</title>
		<link rel="stylesheet" href="Qunatity/style.css">

		<style>

		</style>
	</head>
	<body>

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
									<td><form action="" method="post">
										<div class="quantity-control" data-quantity="">
											<button name="addToCart" class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
												<g>
													<g>   
														<path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
													</g>
												</g>
											</svg></button>
											<input type="number" class="quantity-input" data-quantity-target="" name="quantity" value="<?php echo $res['qty']; ?>" step="1" min="1" max="" name="quantity">
											<button name="addToCart" class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
												<path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
											</button>
										</div>
									</form>
								</td>
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
					<a href="checkotut.php"
					 
					class="my-4 text-white w-100">
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




	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script  src="Qunatity/script.js"></script>
</body>
</html>