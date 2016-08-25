<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.1.0.min.js"></script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript">

$( document ).ready(function() {
    var altura=$(".separador2").innerHeight();
    var mitad = (altura/2)-3;
    $(".separador2").css("bottom",-mitad+"px");    
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="contenedorsite">
	<header id="masthead" class="site-header" role="banner">

		 <div class="containerpage">
		 <div class="col-md-12">
            	<div class="col-md-6 col-sm-4 col-xs-12 slogan">
            		<?php if ( get_header_image() ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
					<?php endif; ?>
            	</div>
            	<div class="col-md-6  col-sm-8 col-xs-12 socialnetworks">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
						<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->			        
			     </div>
              
            </div>
           </div>

		


		<!--<hgroup>
			<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2>
		</hgroup>-->

		
		
		

	</header><!-- #masthead -->

	<div id="main" class="wrapper">