<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ion_theme
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
	<!-- Header -->
	<header id="header" class="skel-layers-fixed">
		<h1><a href="<?php site_url() ?>"><?php bloginfo('title'); ?></a></h1>
		<?php 
			wp_nav_menu(array(
			'theme_location' =>'mainmenu',//form function php
			'container' =>'nav',//from nav tag
			'container_id' =>'nav',// nav tag id
			'walker'	=>new WP_Bootstrap_Navwalker(),//nav walker.php inculde
			)); 
		?>
	</header>