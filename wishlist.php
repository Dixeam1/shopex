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
</head>
<body>
	<?php include 'layout.php'; ?>

	<div class="container" style="margin-top: 137px">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead class="">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Image</th>
							<th scope="col">Title</th>
							<th scope="col">Color</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
							<th scope="col">Total Price</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sr = 1;
						$sql = "SELECT * FROM `product` INNER JOIN `wishlist` ON product.`id` = wishlist.`p_id`";
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
				</div>
			</div>
		</div>
	</body>
	</html>