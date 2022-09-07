<?php  
include '../conn.php';
include '../function.php';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/55d5179fd9.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.dropdown-toggle::after {
			content: none;
		}
		.dropdown-toggle::after {
			content: none;

		}   
		.dropdown-menu{
			min-width: 9rem !important;
		}
		body{
			background: transparent;
		} 
		ul li{
			list-style-type:none;   

		}   
	</style>
</head>
<body>
	<div class="container" style="margin-top:200px;">
		<div class="row">
			<?php
			$id = $_GET['id'];
			$result = "SELECT * FROM `product` WHERE id = $id";
			$sql = mysqli_query($conn, $result);
			$res = mysqli_fetch_all($sql, MYSQLI_ASSOC);
			// echo "<pre>";

			foreach($res as $result){?>
				<div class="container">
					<div class="row">
						<h1 class="mb-5"><b>Title: </b><?php echo $result['name']; ?></h1 class="mb-5">
						
						<div class="col-md-4"><img class="w-100" src="uploads/<?php echo $result['images']; ?>"></div>
						<div class="col-md-4"><img class="w-100" src="uploads/<?php echo $result['image1']; ?>"></div>
						<div class="col-md-4"><img class="w-100" src="uploads/<?php echo $result['image2']; ?>"></div>

						
						<div class="col-md-12 mt-5">
							<ul>
								<li><b>Product ID: </b><?php echo $result['product_id']; ?></li>
								<li><b>Title: </b><?php echo $result['name']; ?></li>
								<li><b>Description: </b><?php echo $result['description']; ?></li>
								<li><b>Category: </b><?php echo $result['category']; ?></li>
								<li><b>Pieces: </b><?php echo $result['pieces']; ?></li>
								<li><b>Pieces 1: </b><?php echo $result['pieces1']; ?></li>
								<li><b>Pieces 2: </b><?php echo $result['pieces2']; ?></li>
								<li><b>Pieces 3: </b><?php echo $result['pieces3']; ?></li>
								<li><b>Quantity: </b><?php echo $result['qtytime']; ?></li>
								<li><b>Quantity 1: </b><?php echo $result['qtytime1']; ?></li>
								<li><b>Quantity 2: </b><?php echo $result['qtytime2']; ?></li>
								<li><b>Est. Time: </b><?php echo $result['esttime']; ?></li>
								<li><b>Est. Time 1: </b><?php echo $result['esttime1']; ?></li>
								<li><b>Est. Time 2: </b><?php echo $result['esttime2']; ?></li>
								<li><b>Price: </b><?php echo $result['price']; ?></li>
								<li><b>Price 1: </b><?php echo $result['price1']; ?></li>
								<li><b>Price 2: </b><?php echo $result['price2']; ?></li>
								<li><b>Price 3: </b><?php echo $result['price3']; ?></li>
								<li><b>Feature: </b><?php echo $result['feature']; ?></li>
								<li><b>Camera: </b><?php echo $result['camera']; ?></li>
								<li><b>Screen Size: </b><?php echo $result['screensize']; ?></li>
								<li><b>Material: </b><?php echo $result['meterial']; ?></li>
								<li><b>Display Color: </b><?php echo $result['displaycolor']; ?></li>
								<li><b>Battery Capacity: </b><?php echo $result['baterycapacity']; ?></li>
								<li><b>Function: </b><?php echo $result['function']; ?></li>


							</ul>					

						</form>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>





</body>
</html>