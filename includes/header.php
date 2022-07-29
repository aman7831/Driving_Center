<?php
	$page = "";
	$page = (isset($_GET['id']))?$_GET['id'] : 'home';
	if(!in_array($page, array('home','about','services','free-estimates','free-estimates-send','gallery','testimonials','testimonials-send','quote','quote-send','contact','contact-send','faq','smbanner','overlap','features','midlogo')))
	{
	include("404.php");
	exit;
	}
?>
<?php
	$address ='Kalanki, Kathmandu';
	$email = 'amanbhandari188@gmail.com';
	$phone = '+977-9861437372';
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="author" content="Jasper IT">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
		<!-- Meta SEO -->
		<title>Driving Center</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<!-- CSS File -->
		<link rel="icon" href="fav.png" type="image/x-icon" />
		<link rel="shortcut icon" href="fav.png" type="image/x-icon" />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
		<link href="css/ionicons.min.css" rel="stylesheet" />
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="fancybox/jquery.fancybox.css" rel="stylesheet" />
		<link href="css/animate.css" rel="stylesheet" />
		<link href="css/owl.carousel.css" rel="stylesheet" />
		<link href="css/owl.theme.css" rel="stylesheet" />
		<link href="css/owl.transitions.css" rel="stylesheet" />
		<link href="css/unite-gallery.css" rel="stylesheet" />
		<link href="css/lightbox.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/pater.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link href="css/style.css" rel="stylesheet" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
	</head>
	<body>
		<!-- Wrapper Start -->
		<div class="wrapper">
			<!-- Header Sections -->
			<header>
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-xs-10">
								<ul>
									<li><i class="fa fa-envelope"></i> <?php echo $email; ?></li>
									<li><i class="fa fa-phone"></i> 9861437372</li>

								</ul>
							</div>
							<div class="col-sm-3 col-xs-2">
								<ul class="social-icons-top">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
							<div class="col-sm-3 col-xs-12">
								<div class="top-estimates">
									<a href="./quote">Request a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<div class="logo">
									<h2>Driving Center</h2>
									<!-- <img src="images/logo.png" alt="" /> -->
								</div>
							</div>
							<div class="col-md-10  navigation_block hidden-xs">
								<div class="navigation">
									<nav class="navbar navbar-inverse navbar-color navbar-static-top ">
										<div class="collapse navbar-collapse " id="bs-hrnepal-navbar-collapse-1">
											<ul class="nav navbar-nav nav-links">
												<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="./home">Home</a></li>
												<li class="<?php if($page=='about'){echo 'active';} ?>"><a href="./about">About Us</a></li>
												<li class="<?php if($page=='services'){echo 'active';} ?>"><a href="./services">Services</a></li>
												<li class="<?php if($page=='gallery'){echo 'active';} ?>"><a href="./gallery">Gallery</a></li>
												<li class="<?php if($page=='testimonials'){echo 'active';} ?>"><a href="./testimonials">Testimonials</a></li>
												<li class="<?php if($page=='free-estimates'){echo 'active';} ?>"><a href="./free-estimates">Free-estimate</a></li>
												<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="./contact">Contact Us</a></li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Navigatio for Mobile or Small Devices -->
			<div class="mobile_menu hidden-lg hidden-md hidden-sm">
				<div class="menu_icon_box">
					<div class="tab_button">
						<a class="tab_button1" href="tel:<?php echo $phone; ?>"><i class="fa fa-phone"></i> Click To Call</a>
						<a class="tab_button2" href="sms:<?php echo $phone; ?>"><i class="fa fa-comments"></i> Tap To Text</a>
					</div>
					<div class="menu_icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="sidebar">
					<div class="menu_icon menu_icon_active">
						<i class="fa fa-angle-left"></i>
					</div>
					<div class="tab_section">
						<div class="mobile_slideLogo">
							<a href=".">
								<img src="images/logo.png" alt="" title="driving training school" class="img-responsive">
							</a>
						</div>
						<ul class="accordion">
							<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="./home">Home</a></li>
							<li class="<?php if($page=='about'){echo 'active';} ?>"><a href="./about">About Us</a></li>
							<li class="<?php if($page=='services'){echo 'active';} ?>"><a href="./services">Services</a></li>
							<li class="<?php if($page=='gallery'){echo 'active';} ?>"><a href="./gallery">Our Gallery</a></li>
							<li class="<?php if($page=='quote'){echo 'active';} ?>"><a href="./quote">Request A Quote</a></li>
							<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="./contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Modern Social Media Icon Display -->
			<div class=social_media_block>
				<div class="share_icon">
					<i class="fa fa-share-alt"></i>
					<div class="social_icon">
						<ul>
							<li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>