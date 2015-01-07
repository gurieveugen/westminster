<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if IE]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" />
  <![endif]-->
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="global-box cf">
	<header id="header" class="cf">
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<nav class="main-menu cf">
			<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false ) ); ?>
		</nav>
	</header>
		
	<section id="content-section" class="cf">
	 <figure class="header-img <?php if (is_front_page()) { ?>home<?php } ?>">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<?php the_post_thumbnail(); ?>
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/uploads/img_01.jpg" alt=" ">
		<?php endif; ?>
	 </figure>
		
