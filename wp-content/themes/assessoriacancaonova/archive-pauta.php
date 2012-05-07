<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

	<div id="container-content" class="main">
		<div class="lista">

			<h1>Pautas</h1>
			<?php query_posts( array ( 'post_type' => 'pauta', 'posts_per_page' => 4 ) ); ?>
			<ul >
			<?php while ( have_posts() ) : the_post(); ?>
                        <?php $id = get_the_ID();?>	
				<li>
					<time><?php echo get_the_date('d/m/Y'); ?></time>
					<a href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
						<?php $content = get_the_content(); ?>
                        <?php $content = substr($content, 0, 110);?>
                        <?php $content .='...'; ?>
                        <p><?php echo $content; ?></p>
					</a>
				</li><!-- pauta -->
				<?php endwhile; ?>
			</ul>

				<a href="#content-footer" id="ver-mais" class="ver-mais">Ver mais</a>

		</div><!-- lista-pautas -->
	</div> <!-- main -->

<?php get_footer(); do_action( 'wp_ajax_nopriv_' . $_REQUEST['action'] );?>
<script type="text/javascript" >
jQuery(document).ready(function($) {
        var $win = $(window);
        var pag = 1;
        jQuery('.ver-mais').live("click",function() {
            pag++;
            var data = {
                    action: 'cn-paginate',
                    paged: pag,
                    qtd: 4,
                    tipo: 'pauta' 
            };

            jQuery.post('<?php echo  admin_url( 'admin-ajax.php' )?>', data, function(response) {
                if(response!="vazio"){
                    $('.lista ul').append(response);
                    $('html,body').animate({scrollTop: $("#content-footer").offset().top}, 1750);
                }else{
                    $('#ver-mais').hide();
                }
            });

        });


        jQuery(window).scroll(function() {  
            if($win.height() + $win.scrollTop() == $(document).height()){
                pag++;
                var data = {
                    action: 'cn-paginate',
                    paged: pag,
                    qtd:   4,
                    tipo:  'pauta'
                    
                };

                jQuery.post('<?php echo  admin_url( 'admin-ajax.php' )?>', data, function(response) {
                    if(response!="vazio"){
                        $('.lista ul').append(response);
                    }else{
                        $('#ver-mais').hide();
                    }
                });
            }else{}
        });
});
</script>