<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-menu-icon"><div class="icon-part icon-top"></div><div class="icon-part icon-middle"></div><div class="icon-part icon-bottom"></div></div>
		<ul class="header-menu">
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>">Home</a></li>
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>/enredo">Enredo</a></li>
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>/herois">Personagens</a></li>
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>/gameplay">Gameplay</a></li>
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>/screenshots">Screenshots</a></li>
			<li><a class="link-hover" href="<?php echo get_home_url(); ?>/contato">Contato</a></li>
		</ul>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
