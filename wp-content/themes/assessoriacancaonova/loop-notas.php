<?php wp_enqueue_script('hide-notas', get_stylesheet_directory_uri().'/library/js/hide-notas.js') ; ?>
<?php query_posts( array ( 'post_type' => 'nota') ); ?>
<?php $checker = 0;?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if(get_post_meta(get_the_ID(), 'show_index', true)){?>
<?php wp_enqueue_script('display-notas', get_stylesheet_directory_uri().'/library/js/display-notas.js') ; ?>
<style>
    .home #container-content section#destaque-fotos{margin-left: 0px;}
</style>
        <?php if($checker==0){?>
                <header>
                        <h3>Nota Oficial</h3>
                </header>
        <?php $checker++; ?>
        <?php } ?>
                <article>
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </article>


<?php } ?>
<?php endwhile; ?>