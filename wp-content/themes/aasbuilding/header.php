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
	<nav class="main-nav hide z-depth-3">
		<img src="wp-content/uploads/2016/12/logo_AAS_nav.svg" alt="logo aas building">
		<?php wp_nav_menu(array('theme_location'=>'primary')) ?>
	</nav>
	<div class="hamburger-menu">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="collapse-menu">
		<?php wp_nav_menu(array('theme_location'=>'hamburger')) ?>
	</div>
	<div id="logo"><?php the_custom_logo();?></div>
	<div class="scroll-section">
		<a href="#about"><i class="ion-chevron-down text-center"></i></a>
	</div>
</header>
<body>
