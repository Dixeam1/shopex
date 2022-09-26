<?php 
// include 'function.php';
include 'conn.php';
include 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="vendors/css/style1.css">
	
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">

	<style type="text/css" id="enject">
		.text-orange{
			color: #ff6a00;
		}
		.bg-orange{
			background-color: #ff6a00;
		}
	</style>
</head>
<body>
	<?php 
	$result = select('product');

	?>
	<div class="container" style="margin-top: 140px;">
		<div class="row">
			<div class="col-md-12 text-center">
				<h4 class=""> 
					<span class="float-left" style="color: #ff6a00;">
						20% Discount Special offer
					</span>
					<small class="float-right" style="color: #ff6a00;"> 
						<span class="text-bold">
							<?php echo count($result); ?>
						</span>
						products are available 
					</small>
				</h4>	
				<hr class="mt-4">
				<form class="form-horizontal span6">
					<div class="control-group">
						<label class="control-label alignL" style="color: #ff6a00;">Sort By </label>
						<select style="color: #ff6a00; border:1px solid #ff6a00;">
							<option>Priduct name A - Z</option>
							<option>Priduct name Z - A</option>
							<option>Priduct Stoke</option>
							<option>Price Lowest first</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container my-5 ">
		<a class="float-right" data-toggle="tab" onclick="listView()"><span class="btn btn-large bg-orange text-white"><i class="icon-list"></i></span></a><br>
		<div class="tab-content my-5">
			<div class="tab-pane" id="listView">
				<?php 

				$result = select('product');
				foreach ($result as $res) {

					?>
					<div class="row">	  

						<div class="col-md-3">
							<img style="width: 100%;" src="themes/images/<?php echo $res['images'] ?>" alt=""/>
						</div>
						<div class="col-md-7 text-orange">
							<h3>New | Available</h3>				
							<hr class="soft"/>
							<h5><?php echo $res['name']; ?> </h5>
						</div>
						<div class="span3 alignR ">
							<h3 class="text-orange">$ <?php echo $res['price']; ?></h3>
							<a class="btn  btn-large mt-3 bg-orange text-white" href="product.php?id=<?php echo $res['id']?>" style="margin-top: 10px; text-decoration:none;" >View Details</a>
						</div>
					</div>
					
					
				<?php } ?>

			</div>
		</div>
	</div>


	<div class="container mt-5">
		
		<div class="row">
			<?php 
			$result = select('product');
			foreach ($result as $res) {


				?>
				<div class="col-md-3">
					<a class="" style="color:#ff6a00; text-decoration: none; " href="product.php?id=<?php echo $res['id']?>
					">
					<div class="">
						<img class="w-100" src="themes/images/<?php echo $res['images'];?>" alt=""/>
					</div>

					<div class="caption">
						<h5 class="products_title font">
							<?php echo $res['name']; ?>

						</h5>

						<h4 class="products_price font py-2">
							&dollar;<?php echo $res['price']; ?>

						</h4>
					</div>
				</a>
			</div>
		<?php } ?>
	</div>
</div>
</div>
</div>
<script>
	function listView() {
		var x = document.getElementById("listView");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>

</body>
</html>