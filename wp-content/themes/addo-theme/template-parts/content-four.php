 <!-- NEWS SECTION -->

<div class="section" id="section-four" data-anchor="News">
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--<img src="<?php bloginfo('template_directory');?>/assets/img/news_fill.png" class="img-responsive" />-->
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
                            <!--<p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                            <p>Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                            <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>-->
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
                            <!--<button class="cloud-btn">Read More</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF NEWS SECTION -->