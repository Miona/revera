<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Revera
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="site-header-inner">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding col-sm-4">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
				
                                
			</div>
		</div>
	<!-- .container -->


<nav class="site-navigation">
	<div class="container">
		<div class="row">
			<!--<div class="site-navigation-inner col-sm-8">
				
					<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<!--<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				  </div>

				<!-- The WordPress Menu goes here -->
                                <div class="col-sm-8 mainmenu">
		<div class="mobilenavi"></div>
				<div id="submenu" class="topmenu"><ul id="topmenu" class="sfmenu sf-js-enabled sf-shadow"><li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-108 current_page_item menu-item-116"><a href="http://demo.fabthemes.com/revera/">Home</a></li>
<li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="http://demo.fabthemes.com/revera/about/">About</a></li>
<li id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a href="http://demo.fabthemes.com/revera/sample-page-2/">Sample page</a></li>
<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="http://demo.fabthemes.com/revera/portfolio/">Portfolio</a></li>
<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a href="http://demo.fabthemes.com/revera/blog/">Blog</a></li>
<li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-88"><a href="http://demo.fabthemes.com/revera/parent-page/" class="sf-with-ul">Parent page<span class="sf-sub-indicator"> »</span></a>
<ul class="sub-menu" style="display: none; visibility: hidden;">
	<li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="http://demo.fabthemes.com/revera/full-page/">Full page</a></li>
	<li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="http://demo.fabthemes.com/revera/parent-page/child-page-1/">Child page 1</a></li>
	<li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a href="http://demo.fabthemes.com/revera/parent-page/child-page-2/">Child page 2</a></li>
</ul>
</li>
<li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="http://demo.fabthemes.com/revera/contact/">Contact</a></li>
                                    </ul></div>		</div> </div>  </div>
		

				<!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->
</header><!-- #masthead -->
<?php if(!is_front_page()) { ?>

<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8">
<?php } ?>

