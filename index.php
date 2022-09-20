<?php 
// include 'function.php';
include 'conn.php';
// header('location: layout.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shopex</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="vendors/css/style1.css">
	<!-- Bootstrap style --> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favi.png">
	
	<!-- Slick Slider  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
	<!-- Slick Slider End-->

	<!-- <link rel="stylesheet" href="bootstrap/css/style.css"> -->

	<link rel="stylesheet" type="text/css" href="themes/css/style.css">
	<style type="text/css">
		.content-details ul li {
			list-style-type: disc;
			color: white;
			line-height: 30px;
		}
	</style>
</head>
<body>
	<?php 

	include 'layout.php';

	?>


	<!-- Header End====================================================================== -->
	<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide" style="width:100%; margin-top: 127px;">
			<img src="themes/images/1232.png" style="width: 100%;
			height: 410px;
			box-shadow: 2px 2px 6px #ff6a00">
		</div>
		<div id="mainBody">
			<div class="container mt-5">
				<div class="row">
					<div class="span9" style="width:100% !important;">		
						<div class="well well-small" style=" border: 20px solid #ff6a00; border-radius: 5px;">
							
							<div class="row-fluid ">
								<!--Slick Carousel Slider-->
								<div class="main">
									<div class="slider slider-for">
									</div>
									<div class="slider slider-nav">
										<div>
											<img style="width:100%;" src="themes/images/Hecd62a12c4d44cd78e956dc0095f28acL.jpg">
										</div>

										<div>
											<img style="width:100%;" src="themes/images/H781f8f65e0d34e9291b93164832bd0879.jpg_960x960.webp">
										</div>

										<div>
											<img style="width:100%;" src="themes/images/Hd406b89b73ed4f169a7bbeb6ae6bc87fz.jpg">
										</div>

										<div>
											<img style="width:100%;" src="themes/images/H42f69faa752243d1af9dd8f1213b0bb0W.jpg">
										</div>
										<div>
											<img style="width:100%;" src="themes/images/Hdad1b004941d46deb462a5073c21b0974.jpg_960x960.webp"></div>
										</div>
									</div>

								</div>
							</div>

							<div class="container mt-5">
								<div class=" row" >
									<div class="col-md-4 thumb ">
										<h5 class=" font">Safe and Redivable Payment</h5>
									</div>



									<div class="col-md-4 thumb">
										<h5 class=" font">					
											Money Back Guarantee
										</h5>
									</div>



									<div class="col-md-4 thumb">
										<h5 class="font">
											24/7 Customer Service
										</h5>
									</div>
								</div>



								<h2 style="font-style: italic; font-size: 50px;margin-bottom: 22px; margin-top: 50px;">Trade  <span style="color:#ff6a00;">services</span>  </h2>
								<h6 style="    font-size: 21px; margin-bottom: 40px;">Shopex.com's trade services help ensure that your purchases are protected.</h6>



								<div class="container">
									<div class="row">
										<div class="col-md-3">
											<div class="content">
												<a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
													<div class="content-overlay"></div>
													<img style="height: 140px;" class="content-image" src="themes/images/1.webp">
													<div class="content-details fadeIn-top">
														<ul>

															<li>
																On-time shipping
															</li>

															<li>
																Quality protection
															</li>

														</ul>
													</div>
												</a>

											</div>
											<div class="font">
												<p>
													Trade Assurance 
												</p>
												<p style=" font-size: 13px;">
													ORDER PROTECTION
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="content">
												<a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
													<div class="content-overlay"></div>
													<img  style="height: 140px;" class="content-image" src="themes/images/2.webp">
													<div class="content-details fadeIn-top">
														<ul>

															<li>
																Global online payment
															</li>

															<li>
																Security compliance
															</li>

															<li>
																provide online refund if goods <br> is not shipped
															</li>

														</ul>

													</div>
												</a>
											</div>
											<div class="font">
												<p>
													Payment
												</p>
												<p style=" font-size: 13px;">
													PAYMENT SOLUTION
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="content">
												<a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
													<div class="content-overlay"></div>
													<img  style="height: 140px;" class="content-image" src="themes/images/3.webp">
													<div class="content-details fadeIn-top">
														<ul>

															<li>
																Production monitoring
															</li>

															<li>
																On-site factory check
															</li>

															<li>
																Reduced risks in delays and <br>product conformity
															</li>

														</ul>
													</div>
												</a>
											</div>
											<div class="font" style="margin:10px 0 0 12px;">
												<p style="font-size: 18px;
												font-weight: bolder;">
												Inspection Solution
											</p>
											<p style="margin-top: 10px; font-size: 13px;">
												INSPECTION
											</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="content">
											<a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
												<div class="content-overlay"></div>
												<img  style="height: 140px;" class="content-image" src="themes/images/4.webp">
												<div class="content-details fadeIn-top">
													<ul>

														<li>
															Fast ocean and air shipping
														</li>

														<li >
															Competitive prices
														</li>

														<li>
															Online tracking
														</li>

													</ul>


												</div>
											</a>
										</div>
										<div class="font">
											<p>
												Ocean and air shipping
											</p>
											<p style=" font-size: 13px;">
												LOGISTICS SERVICE
											</p>
										</div>
									</div>
								</div>
							</div>


							<h1 class="all_pro font">
								All Products
							</h1>
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
													<h5 class="products_title font"><?php echo $res['name']; ?></h5>

													<h4 class="products_price font py-2">
														&dollar;<?php echo $res['price']; ?></h4>
													</div>
												</a>
											</div>
										<?php } ?>
									</div>
								</div>








							
							</div>
							<!-- <span id="themesBtn"></span> -->
							<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
							<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
						</script><script  src="bootstrap/js/script.js"></script>
					</body>
					</html>