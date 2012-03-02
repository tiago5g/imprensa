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
		
			<section id="menu-rapido">
				<header>
					<h3>Acesso Rápido</h3>
				</header>
			</section><!-- #menu-rapido -->

			<section id="ultimas-pautas">
				<header>
					<h3>Pautas</h3>
				</header>

				<article>
					<div>
						<time>01/01/2011</time>
					</div>
					<a href="#" title="Titulo da Pauta">
						<h4>Titulo da Pauta</h4>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
						</div>
					</a>
				</article>

				<article>
					<div>
						<time>01/01/2011</time>
					</div>
					<a href="#" title="Titulo da Pauta">
						<h4>Titulo da Pauta</h4>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
						</div>
					</a>
				</article>

				<article>
						<div>
							<time>01/01/2011</time>
						</div>
						<a href="#" title="Titulo da Pauta">
							<h4>Titulo da Pauta</h4>
							<div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
							</div>
						</a>
				</article>
				
				<footer>
					<span><a href="#" title="">veja mais</a></span>
				</footer>
			</section><!-- #ultimas-pautas -->

			<section id="ultimos-artigos">
				<header>
					<h3>Artigos</h3>
				</header>
				
				<article>
					<div>
						<time>01/01/2011</time>
						<span>Categoria</span>
					</div>
					<a href="#" title="Titulo do Artigo">
						<h4>Titulo do Artigo</h4>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
						</div>
					</a>
				</article>

				<article>
					<div>
						<time>01/01/2011</time>
						<span>Categoria</span>
					</div>
					<a href="#" title="Titulo do Artigo">
						<h4>Titulo do Artigo</h4>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
						</div>
					</a>
				</article>

				<article>
					<div>
						<time>01/01/2011</time>
						<span>Categoria</span>
					</div>
					<a href="#" title="Titulo do Artigo">
						<h4>Titulo do Artigo</h4>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta ante vitae augue fermentum non volutpat nisl porta.</p>
						</div>
					</a>
				</article>
				
				<footer>
					<span><a href="#" title="">veja mais</a></span>
				</footer>
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

		</div><!-- #main -->

<?php get_footer(); ?>