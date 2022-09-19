<?php 
include 'function.php';
include 'conn.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>product details</title>
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
		<div id="header">

			<!-- Navbar ================================================== -->
			<div id="logoArea" class="navbar">
				<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-inner">
					<a class="brand" href="index.php">
						<h1 class="text-success">SHOPEX</h1></a>
						<form class="form-inline navbar-search" style="margin-left: 100px;" method="post" action="products.html" >
							<input id="srchFld" class="srchTxt" type="text" />

							<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
						</form>
						<!-- <a href="product_summary.html" class=""><span class="btn btn-mini btn-primary mt-3"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes </span> </a> --> 

						<ul id="topMenu" class="nav pull-right">
							<li class=""><a href="special_offer.php">Shop</a></li>
							<li class=""><a href="normal.html">Delivery</a></li>
							<li class=""><a href="contact.html">Contact</a></li>

							<?php $result = select('cart'); ?>
							<li class="">
								<a href="cart.php" role="button" ><span class="btn btn-large btn-primary">
									<i class="icon-shopping-cart icon-white"></i> <?php echo count($result); ?> Itemes
								</span></a></li>



								<li class="">
									<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
									<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3>Login Block</h3>
										</div>
										<div class="modal-body">
											<form class="form-horizontal loginFrm">
												<div class="control-group">								
													<input type="text" id="inputEmail" placeholder="Email">
												</div>
												<div class="control-group">
													<input type="password" id="inputPassword" placeholder="Password">
												</div>
												<div class="control-group">
													<label class="checkbox">
														<input type="checkbox"> Remember me
													</label>
												</div>
											</form>		
											<button type="submit" class="btn btn-success">Sign in</button>
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div> 
			<!-- Header End====================================================================== -->
			<div id="mainBody">
				<div class="container">
					<div class="row">
						<!-- Sidebar ================================================== -->

						<!-- Sidebar end=============================================== -->
						<div class="span9">
							<ul class="breadcrumb">
								<li><a href="index.php">Home</a> <span class="divider">/</span></li>
								<li><a href="special_offer.php">Products</a> <span class="divider">/</span></li>
								<li class="active">product Details</li>
							</ul>	
							<div class="row">	  
								<?php
								$id = $_GET['id'];
							
								
								

								$result = "SELECT * FROM `product` WHERE id = $id";
								$sql = mysqli_query($conn, $result);
								$res = mysqli_fetch_all($sql, MYSQLI_ASSOC);

								foreach($res as $result){
									?>
									

									<!-- </div> -->
									<div id="gallery" class="span3">
										<a href="themes/images/" title="Fujifilm FinePix S2950 Digital Camera">
											<img src="themes/images/<?php echo $result['images'] ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
										</a>
										<div id="differentview" class="moreOptopm carousel slide">
											<div class="carousel-inner">
												<div class="item active">
													<a href="themes/images/<?php echo $result['images'] ?>"> <img style="width:29%" src="themes/images/<?php echo $result['images'] ?>" alt=""/></a>
													<a href="themes/images/<?php echo $result['image1'] ?>"> <img style="width:29%" src="themes/images/<?php echo $result['image1'] ?>" alt=""/></a>
													<a href="themes/images/<?php echo $result['image2'] ?>" > <img style="width:29%" src="themes/images/<?php echo $result['image2'] ?>" alt=""/></a>
												</div>

											</div>

										</div>


									</div>
								<?php } ?>
								<div class="span6">

									<h3><?php echo $result['name'] ?></h3>
									<small><?php echo $result['description'] ?></small>
									<div class="control-group">
										<label class="control-label pull-right"><h3>Color: <?php echo $result['displaycolor'] ?></h3></label>
										<label class="control-label"><h3>$<?php echo $result['price'] ?></h3></label>

									</div>

									<hr class="soft"/>
									<form action="addToCart.php" method="post" class="form-horizontal qtyFrm">
										<div class="control-group">
											<div class="controls">
												<input style="border: 1px solid #ff6a00 !important;" type="number" required class="span1" name="quantity" placeholder="Qty."/>
												<input style="border: 1px solid #ff6a00 !important;" type="text" required class="span1" name="color" placeholder="Color."/>
												<input type="hidden" class="w-50 border border-primary" name="pro_id" value="<?php echo $result['id']; ?>">

												<button type="submit" name="addToCart" class="btn btn-large btn-primary pull-right" style="background:#ff6a00 !important;"> Add to cart <i class=" icon-shopping-cart"></i></button>
											</div>
										</div>
									</form>

									<hr class="soft"/>
									<h4>100 items in stock</h4>
									<form class="form-horizontal qtyFrm pull-right">

									</form>
									<hr class="soft clr"/>
									<p>
										<?php echo $result['description'] ?>

									</p>
									<hr>
									<div class="container">
										<table class="table table-bordered" style="width: 50%;">
											<thead>
												<tr>
													<th><?php echo $result['pieces'];?> Pieces</th>
													<th><?php echo $result['pieces1'];?> Pieces</th>
													<th><?php echo $result['pieces2'];?> Pieces</th>
													<th>>= <?php echo $result['pieces3'];?> Pieces</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<tr>
														<th>$<?php echo $result['price'];?></th>
														<th>$<?php echo $result['price1'];?></th>
														<th>$<?php echo $result['price2'];?></th>
														<th>$<?php echo $result['price3'];?></th>

													</tr>
												</tr>


											</tbody>
										</table>
									</div>
									<div class="container">
										<h4>Lead Time</h4>
										<table class="table table-bordered" style="width: 50%;">
											<thead>
												<tr>
													<th>Quantity Pieces</th>
													<th><?php echo $result['qtytime'];?> Pieces</th>
													<th><?php echo $result['qtytime1'];?> Pieces</th>
													<th><?php echo $result['qtytime2'];?> Pieces</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<tr>
														<th>Est. Time(days)</th>
														<th><?php echo $result['esttime'];?></th>
														<th>> <?php echo $result['esttime1'];?></th>
														<th><?php echo $result['esttime2'];?></th>
													</tr>
												</tr>			
											</tbody>
										</table>
									</div>

									<div class="container">
										<h4>Protection</h4>
										<a class="" href="#" data-toggle="tooltip" data-placement="right" title="On-time dispatch is guaranteed or you will be eligible to claim platform compensation."><h5 style="color: #ff6a00 !important;"><i class="fad fa-arrow-alt-circle-right"></i> On-time Dispatch Guarantee</h5></a>
									</div>
									<div class="container">
										<a class="" href="#" data-toggle="tooltip" data-placement="right" title="If the shipment is delayed or product quality differs from what are specified in the online order, you can claim for a refund. Quick refund: If you can apply for a refund within two hours of making a payment, you will receive a refund immediately."><h5 style="color: #ff6a00 !important;"><i class="fad fa-arrow-alt-circle-right"></i> Refund Policy</h5></a>
									</div>



									<br class="clr"/>
									<a href="#" name="detail"></a>
									<hr class="soft"/>
								</div>

								<div class="span9">

									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade active in" id="home">
											<table class="table table-bordered">
												<tbody>
													<tr class="techSpecRow">
														<th colspan="2">
															<h4>Product Details
															</h4>
														</th>
													</tr>
													<tr class="techSpecRow">
														<td class="techSpecTD1">Brand: </td>
														<td class="techSpecTD2"><?php echo $result['product_id'] ?></td></tr>

														<tr class="techSpecRow"><td class="techSpecTD1">Display size::</td><td class="techSpecTD2"> <?php echo $result['screensize'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Feature:</td><td class="techSpecTD2"><?php echo $result['feature'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Camera:</td><td class="techSpecTD2"><?php echo $result['camera'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">meterial:</td><td class="techSpecTD2"><?php echo $result['meterial'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Displaycolor:</td><td class="techSpecTD2"><?php echo $result['displaycolor'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Price:</td><td class="techSpecTD2">$<?php echo $result['price'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Battery Capacity:</td><td class="techSpecTD2"><?php echo $result['baterycapacity'] ?></td></tr>
														<tr class="techSpecRow"><td class="techSpecTD1">Function:</td><td class="techSpecTD2"><?php echo $result['function'] ?></td></tr>
													</tbody>
												</table>

												<h5>Features</h5>
												<p>
													14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br/>
													OND363338
												</p>

												<h4>Editorial Reviews</h4>
												<h5>Manufacturer's Description </h5>
												<p>
													With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.
												</p>

												<h5>Electric powered Fujinon 18x zoom lens</h5>
												<p>
													The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you're at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.
												</p>
												<h5>Impressive panoramas</h5>
												<p>
													With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It's so easy and the results are impressive.
												</p>

												<h5>Sharp, clear shots</h5>
												<p>
													Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm's Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.
												</p>
											</div>
											<div class="tab-pane fade" id="profile">
												<div id="myTab" class="pull-right">
													<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
													<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
												</div>
												<br class="clr"/>
												<hr class="soft"/>
												<div class="tab-content">
													<div class="tab-pane" id="listView">
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/4.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>
														<hr class="soft"/>
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/5.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>
														<hr class="soft"/>
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/6.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>
														<hr class="soft"/>
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/7.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>

														<hr class="soft"/>
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/8.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>
														<hr class="soft"/>
														<div class="row">	  
															<div class="span2">
																<img src="themes/images/products/9.jpg" alt=""/>
															</div>
															<div class="span4">
																<h3>New | Available</h3>				
																<hr class="soft"/>
																<h5>Product Name </h5>
																<p>
																	Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
																	that is why our goods are so popular..
																</p>
																<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
																<br class="clr"/>
															</div>
															<div class="span3 alignR">
																<form class="form-horizontal qtyFrm">
																	<h3> $222.00</h3>
																	<label class="checkbox">
																		<input type="checkbox">  Adds product to compair
																	</label><br/>
																	<div class="btn-group">
																		<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
																		<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
																	</div>
																</form>
															</div>
														</div>
														<hr class="soft"/>
													</div>
													<div class="tab-pane active" id="blockView">
														<ul class="thumbnails">
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/12.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/13.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
															<li class="span3">
																<div class="thumbnail">
																	<a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
																	<div class="caption">
																		<h5>Manicure &amp; Pedicure</h5>
																		<p> 
																			Lorem Ipsum is simply dummy text. 
																		</p>
																		<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
																	</div>
																</div>
															</li>
														</ul>
														<hr class="soft"/>
													</div>
												</div>
												<br class="clr">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div> </div>
					</div>
					<!-- MainBody End ============================= -->
					<!-- Footer ================================================================== -->
					<div  id="footerSection">
						<div class="container">
							<div class="row">
								<div class="span3">
									<h5>ACCOUNT</h5>
									<a href="login.html">YOUR ACCOUNT</a>
									<a href="login.html">PERSONAL INFORMATION</a> 
									<a href="login.html">ADDRESSES</a> 
									<a href="login.html">DISCOUNT</a>  
									<a href="login.html">ORDER HISTORY</a>
								</div>
								<div class="span3">
									<h5>INFORMATION</h5>
									<a href="contact.html">CONTACT</a>  
									<a href="register.html">REGISTRATION</a>  
									<a href="legal_notice.html">LEGAL NOTICE</a>  
									<a href="tac.html">TERMS AND CONDITIONS</a> 
									<a href="faq.html">FAQ</a>
								</div>
								<div class="span3">
									<h5>OUR OFFERS</h5>
									<a href="#">NEW PRODUCTS</a> 
									<a href="#">TOP SELLERS</a>  
									<a href="special_offer.html">SPECIAL OFFERS</a>  
									<a href="#">MANUFACTURERS</a> 
									<a href="#">SUPPLIERS</a> 
								</div>
								<div id="socialMedia" class="span3 pull-right">
									<h5>SOCIAL MEDIA </h5>
									<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
									<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
									<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
								</div> 
							</div>
							<p class="pull-right">&copy; Bootshop</p>
						</div><!-- Container End -->
					</div>
					<!-- Placed at the end of the document so the pages load faster ============================================= -->
					<script src="themes/js/jquery.js" type="text/javascript"></script>
					<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
					<script src="themes/js/google-code-prettify/prettify.js"></script>

					<script src="themes/js/bootshop.js"></script>
					<script src="themes/js/jquery.lightbox-0.5.js"></script>

					<!-- Themes switcher section ============================================================================================= -->
					<div id="secectionBox">
						<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
						<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
						<div id="themeContainer">
							<div id="hideme" class="themeTitle">Style Selector</div>
							<div class="themeName">Oregional Skin</div>
							<div class="images style">
								<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
								<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
							</div>
							<div class="themeName">Bootswatch Skins (11)</div>
							<div class="images style">
								<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
								<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
								<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
								<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
							</div>
							<div class="themeName">Background Patterns </div>
							<div class="images patterns">
								<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
								<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

								<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

								<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
								<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

							</div>
						</div>
					</div>
					<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
					<script>
						<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
				</body>
				</html>