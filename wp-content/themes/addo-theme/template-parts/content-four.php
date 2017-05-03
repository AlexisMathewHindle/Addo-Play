 <!-- NEWS SECTION -->

<div class="section" id="section-four" data-anchor="News">
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
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
                                <p><?php echo get_the_post_thumbnail();?></p>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="content-container">
                        <div class="content">
                            <h1>News</h1>
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
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo get_the_excerpt();?></p>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF NEWS SECTION -->