<?php

/**
 * Template Name: News Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

get_header();
 ?>

 <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-5 col-xs-offset-2 col-xs-8">
            <div class="news-archive-title">
                <h1>News</h1>
            </div>
            <div class="news-archive">
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                <?php endwhile; ?>
                <!-- end of the loop -->


                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="news-archive-img">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'showposts' => 1,
                    );

                    $post_query = new WP_Query($args);
                        if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                            ?>
                            <?php echo get_the_post_thumbnail();?>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

	

<?php get_footer();?>