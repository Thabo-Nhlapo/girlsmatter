<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title();?>
	</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>../css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>../css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>../css/animate.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>../css/magnific-popup.css" rel="stylesheet">


	<?php wp_head(); ?>

</head>

<body>
	<!-- Page Preloder -->
	<!--<div id="preloder">
		<div class="loader"></div>
	</div>-->

	<!-- Start Header Area -->

	<!-- End Header Area -->
	<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
		<div class="logo">
			<a href="#home"><img src="img/logo.png" alt="">hi</a>
		</div>
		<div class="main-menubar d-flex align-items-center">

				<a href="#home">Home</a>
				<a href="#project">Projects</a>
				<a href="#about">About</a>
				<a href="#donate">Donate</a>

			<div class="menu-bar"><span class="lnr lnr-menu"></span>
			</div>
		</div>

  </div>
</nav>
