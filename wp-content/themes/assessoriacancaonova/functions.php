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
<?php
add_action( 'wp_ajax_nopriv_cn-paginate', 'paginate_callback' );
add_action( 'wp_ajax_cn-paginate', 'paginate_callback' );

function paginate_callback() {
query_posts(array ( 'post_type' => 'artigo', 'posts_per_page' => 4, 'paged' => $_POST['paged'] ));

if(have_posts()){
while ( have_posts() ) : the_post();
$id = get_the_ID();
$category = get_the_terms($id,'tipos-artigos');


?>
<li>
           
                    <time><?php echo get_the_date('d/m/Y'); ?></time>
                    <?php foreach($category as $cat){?>
                    <span><?php echo $cat->name; ?></span>
                    <?php }?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <h4><?php the_title(); ?></h4>
                            <?php $content = get_the_content(); ?>
                            <?php $content = substr($content, 0, 110);?>
                            <?php $content .='...'; ?>
                            <p><?php echo $content; ?></p>
            </a>
</li>
<?php endwhile; ?>
<?php
}else{
    echo "vazio";
}
?>
<?php exit;} ?>