<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
		<div id="container-content" role="main">
                        <section id="nota-oficial">
                                <?php get_template_part( 'loop', 'notas' );?>
                        </section>
			<section id="menu-rapido">
				<header>
					<h3>Acesso Rápido</h3>
				</header>
			</section><!-- #menu-rapido -->

			<section id="ultimas-pautas">
                                <?php get_template_part( 'loop', 'pautas' );?>
			</section><!-- #ultimas-pautas -->
			<section id="ultimos-artigos">				
				<?php get_template_part( 'loop', 'artigos' );?>
			</section><!-- #ultimos-artigos -->

			<section id="destaque-fotos">
				<header>
					<h3>Fotos</h3>
				</header>
				<footer>
					<span><a href="#" title="">veja mais</a></span>
				</footer>
			</section><!-- #destaque-fotos -->

			<section id="proximos-eventos">
				<header>
					<h3>Eventos</h3>
				</header>
			</section><!-- #proximos-eventos -->

<?php get_footer(); ?>
