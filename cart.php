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

		<style>
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
				display: flex;
				justify-content: center;
			}

			td, th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}
			td{

			}
			tr:nth-child(even) {
				background-color: #dddddd;
			}
			th{
				font-weight: bolder;
			}
			.a{
				color: #fff;
				background-color: #ed6b75;
				border-color: #ea5460;    
				font-weight: 400;
				text-align: center; 
				padding: 10px 20px; 
				text-decoration: none
			}
			.a:hover{
				color: #fff;
				background-color: #ed6b75;
				border-color: #ea5460;    
				font-weight: 400;
				text-align: center; 
				padding: 10px 20px; 
				text-decoration: none
			}
			.span{
				color: #fff;
				background-color: #ed6b75;
				border-color: #ea5460;
				font-weight: 900;
				text-align: center;
				border-radius: 10px;
				padding: 20px 30px;
				font-size: large;
				float: right;
				margin-right: 20px;
				margin-top: 25px;
			}
			.Checkout{
				color: #fff;
				background-color: #006dcc;
				border-color: #ea5460;
				font-weight: 900;
				text-align: center;
				border-radius: 10px;
				padding: 20px 30px;
				font-size: large;
				float: right;
				margin-right: 243px;
				margin-top: 25px;

			}
			.Checkout:hover{
				color: #fff;
				background-color: #005580;
				text-decoration: none;
				border-color: #ea5460;
				font-weight: 900;
				text-align: center;
				border-radius: 10px;
				padding: 20px 30px;
				font-size: large;
				/*float: left;*/
				/*margin-left: : 247px;*/
				margin-top: 25px;
			}
		</style>
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
								<a href="cart.php" role="button" ><span class="btn btn-large btn-primary">
									<?php 
									$result = select('cart'); 
									?>
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
			

			<table>
				<tr>
					<th>Sr. #</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Color</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Total Price</th>
					<th>Delete</th>
				</tr>
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
						<td><?php echo $sr++; ?></td>
						<td style="width: 80px;"><img  src="themes/images/<?php echo $res['images'];?>" alt=""></td>
						<td><?php echo $res['name']; ?></td>
						<td><?php echo $res['color']; ?></td>
						<td><?php echo $res['qty']; ?></td>
						<td><?php echo $res['price']; ?></td>
						<td><?php echo $total[0]; ?></td>
						<td><a class="a" href="delete.php?id=<?php echo $res['id']?>">Delete<i class=" fas fa-trash-alt text text-danger " style="font-size: 25px;"></i></a></td>
					</tr>
					
				<?php } ?>	
			</table>
			<a class="Checkout" href="Checkotut.php?total=<?php echo $total_bill?>">
				Now Checkout
			</a>
			<div class="total">
				<div class="span">
					<span>
						Total Bill:
					</span>
					<span >
						$ <?php echo $total_bill; ?> /-
					</span>	
				</div>
			</div>
			
			<!-- Footer ================================================================== -->
			<div  id="footerSection" style="    position: fixed;
			bottom: 0;
			width: 100%;">
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