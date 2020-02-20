<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hull
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-loop-item mb-4 pb-4' ); ?>>
    <?php /* <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>"> */ ?>
        <header class="post-header">
            <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            <?php // the_title( '<h2 class="post-title">', '</h2>' ); ?>
            <div class="post-meta">
                <?php get_template_part( 'templates/post/meta' ); ?>
            </div>
        </header>
        <div class="post-content">
            <?php hwp_get_excerpt(); ?>
        </div>
    <?php /* </a> */ ?>
</article>