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
		
			<section id="menu-rapido">
				Acesso Rápido
			</section>

			<section id="ultimas-pautas">
				Pautas
			</section>

			<section id="ultimos-artigos">
				Artigos
			</section>

			<section id="destaque-fotos">
				Fotos
			</section>
			<section id="proximos-eventos">
				Eventos
			</section>


<?php get_footer(); ?>