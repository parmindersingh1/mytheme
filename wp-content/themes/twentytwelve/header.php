<?php
/**
 * The Header for our theme.
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
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		
               <div id="header_top">
                
                <div id="site_title">
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2></a></h1>

                 		<!-- image of mount carmel -->
	      </div><!-- #site_title -->
             

	<div id="header_utilities">
		<div id="contact_email">
			<a href="mailto:mail.mountcarmelchd.org">Email</a>
		</div>
	<div id="search_area_wrapper">
                 <div id="search_area">
                  <?php get_search_form(); ?>
                  </div>
        </div>
	<div id="quicklinks_container">
		<ul>
			<li>
			<a href="http://app.mountcarmelchd.com/signin" target=_blank>Login</a>
			</li>
			<li>
			<a href="http://app.mountcarmelchd.com/signin">Parents</a>
			</li>
			<li>
			<a href="http://app.mountcarmelchd.com/signin">Staff</a>
			</li>
			</ul>
	</div>
	</div>
    </div>
            
		<nav id="primary_nav" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                 
               <div id="slider">
               <?php echo do_shortcode("[metaslider id=28]"); ?>
               </div>

		
	</header><!-- #masthead -->
<div id="main" class="wrapper">