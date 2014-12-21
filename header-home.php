<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GreenB</title>

	<!-- Bootstrap Core CSS & Ionicon font include -->
	<link href="css/ionicons.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jquery.sidr.dark.css" rel="stylesheet">
	<link href="css/sweet-alert.css" rel="stylesheet">


	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<header id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">GreenB</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#product">Product</a>
					</li>
					<li>
						<a class="page-scroll" href="#services">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					<li>
						<a class="page-scroll" href="shop.php">Shop</a>
					</li>
					<!-- <li>
						<a class="page-scroll" href="faq.php">FAQ</a>
					</li> -->
					<li>
						<a id="userLogin" class="ion-person" href="#"></a>
						<ul id="userMenu">
							<li>
								<a href="customer-login.php">Customer</a>
							</li>
							<li>
								<a href="business-login.php">Business</a>
							</li>
							<li>
								<a href="employee-login.php">Employee</a>
							</li>
						</ul>
					</li>
					<li>
						<a id="toggleSearch" class="ion-search" href="#"></a>
					</li>
					<li>
						<a id="shoppingCart" class="" href="#sidr"><i id="navCart" class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- Search Input -->
		<form id="searchForm" class="form-control form-inline none" action="" method="">
			<input id="searchInput" type="text" placeholder="Search GreenB" />
			<a id="searchClose" class="ion-close" href="#"></a>
		</form>
		<!-- /.container-fluid -->
	</nav>

	<!-- Shopping Cart Sidebar -->
	<div id="sidr">
		<span style="inline-block"><h3>Shopping Cart</h3><a href="#" id="sidrClose"><i class="ion-close"></i></a></span>
		<ul id="sidrList">
			<a href="#saleModal" data-toggle="modal"><li id="checkOut">Checkout</li></a>
		</ul>
	</div>

</header>
