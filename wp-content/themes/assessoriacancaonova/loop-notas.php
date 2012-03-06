<?php query_posts( array ( 'category_name' => 'Nota Oficial') ); ?>
<?php $checker = 0;?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if(get_post_custom_values('display')){?>
        <?php if($checker==0){?>
                <header>
                        <h3>Nota Oficial</h3>
                </header>
        <?php $checker++; ?>
        <?php } ?>
                <article>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <h4><?php the_title(); ?></h4>
                        </a>
                </article>


<?php } ?>
<?php endwhile; ?>