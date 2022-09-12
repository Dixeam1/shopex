<?php 
include 'function.php';
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shopex</title>
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
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
		<link rel="stylesheet" href="bootstrap/css/style.css">


	</head>
	<body>
		<div id="header">
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


							<li class="">
								<a href="Checkotut.php" role="button" ><span class="btn btn-large btn-primary">
									<i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes
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
			<div id="carouselBlk">
				<div id="myCarousel" class="carousel slide">
					<img src="themes/images/1232.png" style="width:100%; height:410px">
				</div>
				<div id="mainBody">
					<div class="container">
						<div class="row">
							<!-- Sidebar ================================================== -->
							<div id="sidebar" class="span3">

								<ul id="sideManu" class="nav nav-tabs nav-stacked">
									<li class="subMenu open"><a> SMARTWATCH [230]</a>

									</li>
									<li class="subMenu"><a> LAPTOP [840] </a>

									</li>
									<li class="subMenu"><a>MOBILES [1000]</a>

									</li>

								</ul>
								<br/>
								<div class="thumbnail">
									<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
									<div class="caption">
										<h5>Payment Methods</h5>
									</div>
								</div>
							</div>
							<!-- Sidebar end=============================================== -->

							<div class="span9">		
								<div class="well well-small">
									<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
									<div class="row-fluid">
										<!--Slick Carousel Slider-->
										<div class="main">
											<div class="slider slider-for">
													<!-- <div><h3>1</h3></div>
													<div><h3>2</h3></div>
													<div><h3>3</h3></div>
													<div><h3>4</h3></div>
													<div><h3>5</h3></div> --> 
												</div>
												<div class="slider slider-nav">
													<div><img style="width:100%; height:100%;" src="themes/images/4.jpg"></div>
													<div><img style="width:100%; height:100%;" src="themes/images/H781f8f65e0d34e9291b93164832bd0879.jpg_960x960.webp"></div>
													<div><img style="width:100%; height:100%;" src="themes/images/Hd406b89b73ed4f169a7bbeb6ae6bc87fz.jpg"></div>
													<div><img style="width:100%; height:100%;" src="themes/images/H42f69faa752243d1af9dd8f1213b0bb0W.jpg"></div>
													<div><img style="width:100%; height:100%;" src="themes/images/Hdad1b004941d46deb462a5073c21b0974.jpg_960x960.webp"></div>
												</div>
											</div>

										</div>
									</div>

									<ul class="thumbnails">
										<li class="span3">
											<div class="thumbnail">
												<h5 class="text-success">Safe and Reliable Payment</h5>
											</div>
										</li>
										<li class="span3">
											<div class="thumbnail">
												<h5 class="text-success">										Money Back Guarantee
												</h5>
											</div>
										</li>

										<li class="span3">
											<div class="thumbnail">
												<h5 class="text-success">24/7 Customer Service</h5>
											</div>
										</li>
									</ul>	


									<h2 style="font-style: italic;">Super <span style="color:red;">Deals</span>  </h2>
									<h6>Top Products, Incredible Price</h6>
									<ul class="thumbnails">
										<li class="span3">
											<div class="thumbnail">
												<a  href=""><img src="themes/images/products/12.webp" alt=""/></a>

											</div>
										</li>
										<li class="span3">
											<div class="thumbnail">
												<a  href=""><img src="themes/images/products/13.webp" alt=""/></a>

											</div>
										</li>
										<li class="span3">
											<div class="thumbnail">
												<a  href=""><img src="themes/images/products/14.webp" alt=""/></a>

											</div>
										</li>

									</ul>	
									<h1 style="background-color: green; padding: 15px 30px; margin: 20px 0px; font-size: 30px; color: white;">
										All Products
									</h1>
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
						<!-- <span id="themesBtn"></span> -->
						<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
					</script><script  src="bootstrap/js/script.js"></script>
				</body>
				</html>