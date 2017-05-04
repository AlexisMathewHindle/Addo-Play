<?php

/**
 * Template Name: News Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

get_header();?>

<div class="container">
    <div class="row">
        <?php
            $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                    <div class="col-md-6">
                        <div class="news-archive">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt();?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-archive-img">
                        <?php echo get_the_post_thumbnail();?>
                        </div>
                    </div>
                    
                    <?php
                }
            }
        ?>
    </div>
</div>



	

<?php get_footer();?>