<?php
// Setting paths to the resources we will need later, js and styles
$path_to_js 	= get_stylesheet_directory_uri() . '/library/js/';
$path_to_styles = get_stylesheet_directory_uri() . '/library/styles/';

// We don't want to load unnecessary things when browsing the Dashboard, right?
if ( ! is_admin() ) {

	function load_LESS() {

		// Retrieving the paths we set above
		global $path_to_js, $path_to_styles;

		// Actually printing the lines we need to load LESS in the HEAD
		print "\n<!-- Loading LESS styles and js -->\n";
		print "<link rel='stylesheet/less' id='style-less-css'  href='" . $path_to_styles . "style.less' type='text/css' media='screen, projection' />\n";
		print "<script type='text/javascript' src='" . $path_to_js . "less-1.1.3.min.js'></script>\n\n";
	}

	// Adding the action to the HEAD
	add_action( 'wp_head', 'load_LESS' );

} // END ! is_admin()
?>