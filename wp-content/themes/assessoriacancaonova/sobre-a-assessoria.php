<?php
/*
Template Name: Sobre a Assessoria */
get_header(); ?>


	<div id="container-content" role="main">
		<div  class="content">
			<div id="content_esquerda">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <?php
                         //consulta sobre assessoria
                        global $wpdb ;
                        $email = array();$telefone = array();
                        $id = get_the_ID();
	$sql = $wpdb->prepare("SELECT meta_key, meta_value from $wpdb->postmeta INNER JOIN $wpdb->posts
                ON ($wpdb->postmeta.post_id = $wpdb->posts.ID)where post_id = %d",
				$id) ;
	$attr = $wpdb->get_results($sql);
        foreach($attr as $d){
            if($d->meta_key=='email')$email[] = $d->meta_value;
            if($d->meta_key=='telefone')$telefone[] = $d->meta_value;
        }
                        ?>
			<!-- Sobre a assessoria -->
				<div id="info">
					<h1><?php the_title(); ?></h1>
					<div>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>

			<!-- Contatos -->
				<div id="contatos">
					<h1>Contatos</h1>

					<div id="email">
						<span>e-Mail</span>
						<?php foreach($email as $m) :?>
                                                    <p><?php echo $m; ?></p>
                                                <?php endforeach?>
					</div>

					<div id="telefone">
						<span>Telefone</span>
						<?php foreach($telefone as $tel) :?>
                                                    <p><?php echo $tel; ?></p>
                                                <?php endforeach?>
					</div>

				</div>
			</div><!-- Content_esquerda -->
                        <?php endwhile; ?>
			<div id="content_direita">
			<!-- colaboradores -->
				<div id="colaboradores">
					<h1>Colaboradores</h1>
					
					<ul>
						<li>
							<img src="<?php bloginfo('url')?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="144" height="144">
							<span class="nome">Osvaldo Luis</span></br>
							<span class="cargo">Gerente - Jornalista</span>
						</li>

						<li>
							<img src="<?php bloginfo('url')?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="144" height="144">
							<span class="nome">Ana Paula Castro</span></br>
							<span class="cargo">Jornalista</span>
						</li>

						<li>
							<img src="<?php bloginfo('url')?>/wp-content/themes/assessoriacancaonova/images/gray.jpg" width="144" height="144">
							<span class="nome">Fulana de tal</span></br>
							<span class="cargo">Jornalista</span>
						</li>


					</ul>
						
				</div>

			</div><!-- content_direita -->

		</div>
	</div><!-- #main -->
	
<?php get_footer(); ?>