	<?php 
	include 'conn.php';

	?>
	<!DOCTYPE html>
	<html lang="en" >
	<head>
		<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Shopex</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
		<link rel="stylesheet" href="themes/layout/style.css">
		<style>



			.has-search .form-control {
				padding-left: 2.375rem;
			}

			.has-search .form-control-feedback {
				position: absolute;
				z-index: 2;
				display: block;
				width: 2.375rem;
				height: 2.375rem;
				line-height: 2.375rem;
				text-align: center;
				pointer-events: none;
				color: #aaa;
			}
			.btn-secondary{
				background-color: #ff6a00 !important;
				border: #ff6a00 !important;

			}
			.form-control{
				border:1px solid #ff6a00 !important;
			}




		</style>
	</head>
	<body>
		<!-- partial:index.partial.html -->
		<body>	

			<div class="navigation-wrap bg-light  start-header start-style">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-expand-md navbar-light">

								<a class="navbar-brand" href="#" target="_blank">
									<h1 style="color: #ff6a00 !important;">ShopEX</h1>
								</a>	


								<div class="input-group">
									<input type="text" style="margin-left:60px;" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-secondary" type="button">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</div>


								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" style="    margin-left: 70px;" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto py-4 py-md-0">

										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="special_offer.php">Shop</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="cart.php">
												<i class="fas fa-shopping-cart"></i>
											</a>
										</li>

										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="#">
												<i class="fas fa-heart"></i>
											</a>
										</li>
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
											<a class="nav-link" href="contact.php">Contact</a>
										</li>
									</ul>
								</div>

							</nav>		
						</div>
					</div>
				</div>
			</div>


<!-- Link to page
	================================================== -->

	

</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
