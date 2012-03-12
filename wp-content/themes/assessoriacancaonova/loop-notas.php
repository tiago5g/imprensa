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
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </article>


<?php } ?>
<?php endwhile; ?>