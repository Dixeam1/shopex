<?php 
include 'function.php';
include 'conn.php';
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


							<li class="">
								<a href="product_summary.php" role="button" ><span class="btn btn-large btn-primary">
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
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a> <span class="divider">/</span></li>
							</ul>
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
												<a href="product_details.php" style="margin-top: 10px;" class="btn btn-large mt-3 btn-primary"> View Details</a>
												
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
							<!-- <a href="compair.html" class="btn btn-large pull-right">Compair Product</a> -->
							<div class="pagination">
								<ul>
									<li><a href="#">&lsaquo;</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">&rsaquo;</a></li>
								</ul>
							</div>
							<br class="clr"/>
						</div>
					</div></div>
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
			</body>
			</html>