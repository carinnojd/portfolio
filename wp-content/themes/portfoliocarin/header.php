<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Carin
 * @subpackage Carin
 * @since Carin 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> 
	<head>
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_url");?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="header">
			<div class="search"><?php get_search_form(); ?></div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/assets/img/header.jpg" /><h1 class="site-title"><?php// bloginfo( 'name' ); ?></h1></a>
				<!--Description: -->
				<h5><?php bloginfo( 'description') ?>
				<?php if(is_page('portfolio')) { ?>
					- Portfolio
				<?php } ?></h5>
			<h1 class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			
			<nav class="navbar">
				 <?php 
				 $navbar = array (
				 	'theme_location' => 'primary' 
				 	);
				 ?>
				<?php wp_nav_menu($navbar); ?>
				
			</nav>
		</div>