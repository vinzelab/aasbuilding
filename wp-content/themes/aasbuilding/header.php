<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <meta name="<?php echo get_bloginfo( 'description' ); ?>" content="DESCRIPTION">
	<title><?php echo get_bloginfo( 'name' ); ?></title>

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>

</head>
<header  class="parallax-window">

	<nav class="main-nav z-depth-3">
		<div class="nav-item">accueil</div>
		<div class="nav-item">services</div>
		<div class="nav-item">réseau</div>
		<div class="nav-item">contact</div>
		<div class="nav-item"><i class="ion-social-facebook"></i></div>
	</nav>
	<div class="hamburger-menu">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="collapse-menu">
		<div class="collapse-nav-item">Accueil</div>
		<div class="collapse-nav-item">Les services</div>
		<div class="collapse-nav-item">Le réseau</div>
		<div class="collapse-nav-item">Nous contacter</div>
	</div>
	<img id="logo" src="img/logo_AAS.svg" alt="logo AAS building">
	<div class="scroll-section">
		<a href="#about"><i class="ion-chevron-down text-center"></i></a>
	</div>
	<!-- <div class="info-wrapper z-depth-3">
		<i class="ion-information"></i>
	</div> -->
	<!-- <div class="info-content z-depth-3">
		<p>06 26 02 65 16</p>
	</div> -->
</header>
<body>
