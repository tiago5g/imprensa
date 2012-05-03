<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>


<header>
        <h3>Pautas</h3>
</header>



<?php query_posts( array ( 'post_type' => 'pauta', 'posts_per_page' => 3 ) ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article>
        <div class="entry-meta">
                <time><?php echo get_the_date('d/m/Y'); ?></time>
        </div>
        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
        <div class="entry-content">
                <?php $content = get_the_content(); ?>
                <?php $content = substr($content, 0, 110);?>
                <?php $content .='...'; ?>
                <p><?php echo $content; ?></p>
        </div>
</article>

<?php endwhile; ?>


<footer>
        <span><a href="<?php echo home_url();?>/pautas" title="">veja mais</a></span>
</footer>