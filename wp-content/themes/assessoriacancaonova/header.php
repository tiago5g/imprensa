<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
                wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') ;

?>
	</head>
	<body <?php body_class(); ?>>
	<div id="container-header">
		<div id="globalbar">
			<nav id="navbar">
				
				<ul id="top-nav">
					<li>
						<a href="http://tv.cancaonova.com/" title="TV Can&ccedil;&atilde;o Nova">TV</a>
					</li>
					<li>
						<a href="http://radio.cancaonova.com/" title="R&aacute;dio AM Can&ccedil;&atilde;o Nova">R&aacute;dio AM</a>
					</li>
					<li>
						<a href="http://blog.cancaonova.com/radiofm/" title="R&aacute;dio FM Can&ccedil;&atilde;o Nova">R&aacute;dio FM</a>
					</li>
					<li>
						<a href="http://m.cancaonova.com/" title="Can&ccedil;&atilde;o Nova Mobile">Mobile</a>
					</li>
					<li>
						<a href="http://chat.cancaonova.com/" title="Chat Can&ccedil;&atilde;o Nova">Chat</a>
					</li>	
					<li>
						<a href="http://loja.cancaonova.com/" title="Loja Virtual Can&ccedil;&atilde;o Nova">Loja</a>
					</li>
				</ul>
			
			</nav>
		</div>
		<header>
			<div id="signature">
				<a href="http://www.cancaonova.com" title="Portal Canção Nova" class="marca"><img src="<?php bloginfo( 'url' ) ?>/wp-content/themes/assessoriacancaonova/images/marca.png"></a>
				<h1><a class="tipo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div id="menubar">
				<nav id="menu-nav">
					<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
					<a id="skip" href="#container-content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
					<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
					<?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'primary', 'menu' => 'nav' ) ); ?>
				</nav>
			</div>
		</header>
	</div>
