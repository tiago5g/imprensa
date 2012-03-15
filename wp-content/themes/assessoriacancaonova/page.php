<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

	<div id="container-content" role="main">
		<section id="content">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( is_front_page() ) { ?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php } else { ?>	
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } ?>
                                        <div class="">
                                                <div >
                                                        <?php the_post_thumbnail(); ?>
                                                </div>
                                                <div>
                                                        <? echo get_post_meta(get_the_ID(), 'numeros', true); ?>
                                                </div>
                                                <section id="destaque-fotos">
                                                        <footer>
                                                                <span><a href="#" title="">mais fotos</a></span>
                                                        </footer>
                                                </section><!-- #destaque-fotos -->
                                        </div>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
			<?php endwhile; ?>
		</section> <!-- #content -->

<!--?php get_sidebar(); ?-->
	</div><!-- #main -->
	
<?php get_footer(); ?>