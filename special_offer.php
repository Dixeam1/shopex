<?php 
// include 'function.php';
include 'conn.php';
include 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
		<script src="themes/js/less.js" type="text/javascript"></script> -->

		<!-- Bootstrap style --> 
		<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
		<link href="themes/css/base.css" rel="stylesheet" media="screen"/>
		<!-- Bootstrap style responsive -->	
		<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<!-- Google-code-prettify -->	
		<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
		<!-- fav and touch icons -->
		<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
		<style type="text/css" id="enject"></style>
	</head>
	<body>
		<div id="mainBody">
			<div class="container" style="margin-top: 140px;">
				<div class="row">
					<div class="col-md-12">
						<h4> 20% Discount Special offer<small class="pull-right"> 40 products are available </small></h4>	
						<hr class="soft"/>
						<form class="form-horizontal span6">
							<div class="control-group">
								<label class="control-label alignL">Sort By </label>
								<select>
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
			<div id="myTab" class="pull-right">
				<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
				<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
			</div>
			<br class="clr"/>
			<div class="tab-content">
				<div class="tab-pane" id="listView">
					<?php 

					$result = select('product');
					foreach ($result as $res) {

						?>
						<div class="row">	  
							<div class="span2">
								<img src="themes/images/<?php echo $res['images'] ?>" alt=""/>
							</div>
							<div class="span4">
								<h3>New | Available</h3>				
								<hr class="soft"/>
								<h5><?php echo $res['name']; ?> </h5>


								<br class="clr"/>
							</div>
							<div class="span3 alignR">
								<form class="form-horizontal qtyFrm">
									<h3>$ <?php echo $res['price']; ?></h3>

									<a href="#" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a><br>
									<a href="product_details.php?id=<?php echo $res['id']?>" style="margin-top: 10px;" class="btn btn-large mt-3 btn-primary">View Details</a>

								</form>
							</div>
						</div>
						<hr class="soft"/>
					<?php } ?>

				</div>



				<div class="tab-pane  active" id="blockView">
					<ul class="thumbnails">
						<?php 
						$result = select('product');
						foreach ($result as $res) {


							?>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.php?id=<?php echo $res['id']?>"><img src="themes/images/<?php echo $res['images'];?>" alt=""/></a>
									<div class="caption">
										<h5 style=" display: block;
										display: -webkit-box;
										-webkit-line-clamp: 3;
										-webkit-box-orient: vertical;
										overflow: hidden;
										text-overflow: ellipsis;"><?php echo $res['name']; ?></h5>

										<h4 style="text-align:center"> <a class="btn" href="#">Buy Now <i class="icon-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">&dollar;<?php echo $res['price']; ?></a></h4>
										</div>
									</div>
								</li>
								<?php 
							}
							?>
						</ul>


						<hr class="soft"/>
					</div>
				</div>

			</div>
		</div>
	</div>





	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
	<script src="themes/js/jquery.lightbox-0.5.js"></script>

</body>
</html>