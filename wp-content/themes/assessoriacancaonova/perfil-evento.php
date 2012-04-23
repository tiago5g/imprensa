<?php
/*
Template Name: Perfil-evento */
get_header(); ?>


	<div id="container-content" role="main">
		<div id="perfil-evento">
			<h1><?php the_title(); ?></h1>
			<div id="fotos">
				<img id="foto-perfil" src="<?php echo get_bloginfo('url') ?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="140" height="100"/>
				<ul id="fotos-flickr">
					<li>
						<a href="#"><img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="55" height="55"/></a>
					</li>
			
					<li>
						<a href="#"><img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="55" height="55"/></a>
					</li>

					<li>
						<a href="#"><img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="55" height="55"/></a>
					</li>

					<li>
						<a href="#"><img src="<?php echo get_bloginfo('url') ?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="55" height="55"/></a>
					</li>
					<li>
						<a href="#">Veja mais fotos</a>
					</li>
				</ul>
				


			</div>
			<div id="conteudo">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>

	</div><!-- #main -->
	
<?php get_footer(); ?>