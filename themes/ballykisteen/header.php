<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">

 * @package WordPress
 * @subpackage Ballykisteen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

	<header>

		<div class="nav">
			<div class="nav__logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="ballykisteen logo" />
			</div>

			<div class="nav__hamburger-wrapper">
				<div class="nav__hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

			<nav class="nav__items">
				<?php wp_nav_menu( array( "menu" => "main-nav" ) ); ?>
			</nav>
		</div>
		
	</header>

	<main class="content">
