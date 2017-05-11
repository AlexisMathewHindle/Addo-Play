<?php

/**
 * Template Name: News Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

get_header();?>


<div id="news-container" class="container">
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


    <div class="row">
        <div class="col-md-6">
            <div class="news-archive">
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><h2>
            <?php the_excerpt(__('(more…)')); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="news-archive-img">
                <?php echo get_the_post_thumbnail();?>
            </div>
        </div>
    </div>

<?php
endwhile;
wp_reset_postdata();
?>
</div>


<?php get_footer();?>
