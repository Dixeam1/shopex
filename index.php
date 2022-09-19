<?php 
include 'function.php';
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
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
	<link href="themes/css/base.css" rel="stylesheet" media="screen"/>
	<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favi.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	<!-- <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png"> -->
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

		// include 'location:layout.php';

	?>


	<!-- Header End====================================================================== -->
	<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide" style="width:100%;">
			<img src="themes/images/1232.png" style="    width: 90%;
			height: 410px;
			box-shadow: 2px 2px 6px #ff6a00">
		</div>
		<div id="mainBody">
			<div class="container">
				<div class="row">
					

					<div class="span9" style="width:100% !important;">		
						<div class="well well-small" style="background: #ff6a00; border: #ff6a00; border-radius: 5px;">
							
							<div class="row-fluid">
								<!--Slick Carousel Slider-->
								<div class="main">
									<div class="slider slider-for">
									</div>
									<div class="slider slider-nav">
										<div><img style="width:50%;" src="themes/images/4.jpg"></div>
										<div><img style="width:50%;" src="themes/images/H781f8f65e0d34e9291b93164832bd0879.jpg_960x960.webp"></div>
										<div><img style="width:50%;" src="themes/images/Hd406b89b73ed4f169a7bbeb6ae6bc87fz.jpg"></div>
										<div><img style="width:50%;" src="themes/images/H42f69faa752243d1af9dd8f1213b0bb0W.jpg"></div>
										<div><img style="width:50%;" src="themes/images/Hdad1b004941d46deb462a5073c21b0974.jpg_960x960.webp"></div>
									</div>
								</div>

							</div>
						</div>

						<div class="container">
							<div class=" span3" style="    width: 352px;">
								<div class="thumbnail thumb">
									<h5 class=" font">Safe and Redivable Payment</h5>
								</div>
							</div>

							<div class=" span3" style="    width: 352px;">
								<div class="thumbnail thumb">
									<h5 class=" font">					Money Back Guarantee
									</h5>
								</div>
							</div>

							<div class=" span3" style="    width: 352px;">
								<div class="thumbnail thumb">
									<h5 class="font">
										24/7 Customer Service
									</h5>
								</div>
							</div>
						</div>	


						<h2 style="font-style: italic; font-size: 50px;margin-bottom: 22px; margin-top: 50px;">Trade  <span style="color:#ff6a00;">services</span>  </h2>
						<h6 style="    font-size: 21px; margin-bottom: 40px;">Shopex.com's trade services help ensure that your purchases are protected.</h6>




						<ul class="thumbnails" style="margin-left: -12px;">
							<li class="span3">
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
								<div class="font" style="margin:10px 0 0 12px;">
									<p style="font-size: 18px;
									font-weight: bolder;">
									Trade Assurance 
								</p>
								<p style="margin-top: 10px; font-size: 13px;">
									ORDER PROTECTION
								</p>
							</div>

						</li>

						<li class="span3">
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
							<div class="font" style="margin:10px 0 0 12px;">
								<p style="font-size: 18px;
								font-weight: bolder;">
								Payment
							</p>
							<p style="margin-top: 10px; font-size: 13px;">
								PAYMENT SOLUTION
							</p>
						</div>
					</li>
					<li class="span3">
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
				</li>

				<li class="span3">
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
					<div class="font" style="margin:10px 0 0 12px;">
						<p style="font-size: 18px;
						font-weight: bolder;">
						Ocean and air shipping
					</p>
					<p style="margin-top: 10px; font-size: 13px;">
						LOGISTICS SERVICE
					</p>
				</div>
			</li>
		</ul>	
		<h1 class="all_pro font">
			All Products
		</h1>
		<div class="tab-pane  active" id="blockView">
			<ul class="thumbnails" style="margin-left: -15px;">
				<?php 
				$result = select('product');
				foreach ($result as $res) {


					?>
					<li class="span3">
						<div class="thumbnail" style="box-shadow: 0px 0px 10px -3px black;">
							<a href="product.php?id=<?php echo $res['id']?>"><img src="themes/images/<?php echo $res['images'];?>" alt=""/></a>
							<div class="caption">
								<h5 class="products_title font"><?php echo $res['name']; ?></h5>

								<h4 class="products_price font">
									&dollar;<?php echo $res['price']; ?></h4>
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