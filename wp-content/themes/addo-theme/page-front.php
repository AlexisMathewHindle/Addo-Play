<?php

/**
 * Template Name: Main Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

// ADVANCED CUSTOM FIELDS //
// $about_us = get_field('about_us_title');
// $about_us_intro = get_field('about_us_intro');
// $about_us_content = get_field('about_us_content');

get_header(); ?>


    <div id="fullpage">
      <div class="section" id="section-one" data-anchor="Home">
            <div class="feature-container">
                <img data-src="<?php bloginfo('template_directory');?>/assets/img/addo_feature_textless.png" />
            </div>
            <h1 class="text-center">
                <span class="element"></span>
            </h1>
            <div class="flags-container">
                <ul class="flags-list">
                    <li>
                        <img src="<?php bloginfo('template_directory');?>/assets/img/french_flag.svg" alt="" />
                    </li>
                    <li>
                        <img class="spain" src="<?php bloginfo('template_directory');?>/assets/img/spain_flag.svg" alt="" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory');?>/assets/img/french_flag.svg" alt="" />
                    </li>
                    <li>
                        <img class="spain" src="<?php bloginfo('template_directory');?>/assets/img/spain_flag.svg" alt="" />
                    </li>
                </ul>
            </div>
        </div>



        <!-- ABOUT US SECTION -->

        <div class="section" id="section-two" data-anchor: "AboutUs">
            <div id="bubble-wrap">
                <div class="bubble x1"></div>
                <div class="bubble x2"></div>
                <div class="bubble x3"></div>
                <div class="bubble x4"></div>
                <div class="bubble x5"></div>
                <div class="bubble x6"></div>
                <div class="bubble x7"></div>
                <div class="bubble x8"></div>
                <div class="bubble x9"></div>
                <div class="bubble x10"></div>
            </div>
            <div class="section-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video_container">
                                <img data-src="<?php bloginfo('template_directory');?>/assets/img/video_fill.png" />
                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-container">
                                <div class="content">
                                    <h1>About us</h1>
                                    <h2>Addo Play has a vision to inspire hunderds of ways to play, every day.</h2>
                                    <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                                    <p>Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                                    <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>
                                    <button class="cloud-btn" id="js-seeTeam" data-toggle="modal" data-target="#teamModal">See out team</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END OF ABOUT US SECTION -->


        <!-- OUR BRANDS SECTION -->

        <div class="section" id="section-three" data-anchor="OurBrands">
            <img class="splatter" id="splatter-one" src="<?php bloginfo('template_directory');?>/assets/img/splat_one.png" />
            <img class="splatter" id="splatter-two" src="<?php bloginfo('template_directory');?>/assets/img/splat_two.png" />




            <div class="image-top">
                <img data-src="<?php bloginfo('template_directory');?>/assets/img/alien_fill.png" class="img-responsive" />
            </div>
            <div class="image-bottom">
                <img data-src="<?php bloginfo('template_directory');?>/assets/img/one_eye_fill.png" class="img-responsive" />
            </div>

            <div class="section-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="mobile-brands">
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" />
                                </div>
                            </div>
                            <div id="randomize">
                                <!--<div class="content container">-->

                                <div class="row">
                                    <div class="col-xs-3">
                                        <div>
                                            <div id="machine1" class="randomizeMachine">
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_two.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_three.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_four.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_five.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_six.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_seven.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_one.png" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-3">
                                        <div>
                                            <div id="machine2" class="randomizeMachine">
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_one.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_six.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_three.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_four.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_five.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_two.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_seven.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-3">
                                        <div>
                                            <div id="machine3" class="randomizeMachine">
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_three.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_one.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_four.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_two.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_seven.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_five.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_six.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" /></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-3">
                                        <div>
                                            <div id="machine4" class="randomizeMachine">
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_four.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_five.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_three.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_one.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_seven.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_six.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" /></div>
                                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/brand_two.png" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shuffle-btn">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="btn-group btn-group-justified btn-group-randomize" role="group">
                                                <div id="ranomizeButton" type="button" class="btn btn-danger btn-lg ranomizeButton">Play</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="btn-group btn-group-justified btn-group-randomize" role="group">
                                                <div id="ranomizeButton" type="button" class="btn btn-danger btn-lg ranomizeButton">Shuffle</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="btn-group btn-group-justified btn-group-randomize" role="group">
                                                <div id="ranomizeButton" type="button" class="btn btn-danger btn-lg ranomizeButton">Twist</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--</div>-->
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="content-container">
                                <div class="content">
                                    <h1>Our Brands</h1>
                                    <p>Children are at the centre of everything we do. Attention to detail is paramout from the toy itself to the attractive, clear and informative packaging.</p>
                                    <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>
                                    <button class="cloud-btn" id="js-seeBrands" data-toggle="modal" data-target="#brandsModal">See all Brands</button>
                                </div>

                            </div>
                            <div class="shop-btn">
                                <img class="splatter" id="splatter-three" src="<?php bloginfo('template_directory');?>/assets/img/splat_one.png" />
                                <button>Shop</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END OF OUR BRANDS SECTION -->

         <!-- NEWS SECTION -->

        <!--<div class="section" id="section-four" data-anchor="News">
            <div class="section-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/news_fill.png" class="img-responsive" />
                        </div>
                        <div class="col-md-6">
                            <div class="content-container">
                                <div class="content">
                                    <h1>News</h1>
                                    <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                                    <p>Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                                    <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>
                                    <button class="cloud-btn">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
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


        <!-- CONTACT SECTION -->

        <div class="section" id="section-five" data-anchor="ContactUs">
            <div class="section-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="map-container">
                                <img id="cloud-one" data-src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                <img id="cloud-two" data-src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                <img id="cloud-three" data-src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                <img id="cloud-four" data-src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                <img id="star-one" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="star-two" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="star-three" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="star-four" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="star-five" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="star-six" data-src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                <img id="aeroplane" data-src="<?php bloginfo('template_directory');?>/assets/img/aeroplane.png" class="img-responsive" />
                                <div class="map" id="map"></div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-container">
                                <div class="content">
                                    <h1>Contact Us</h1>
                                    <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                                    <p>Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                                    <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>
                                    <button class="cloud-btn" id="js-contactUs" data-toggle="modal" data-target="#contactModal"><p class="cloud-p">Contact Us</p></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END OF CONTACT SECTION -->

         <!-- FOOTER -->

        <div class="section" id="footer">
            <div class="footer-container footer-container--one">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#">
                                <h1>@addoplay.com</h1>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="footer-container footer-container--two"></div>
            <div class="footer-container footer-container--three"></div>
            <div class="footer-container footer-container--four"></div>

            <!-- END OF FOOTER -->
        </div>

         <!-- Team Slider Modal -->

    <div class="modal fade teamModal" id="teamModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <!-- Team Slider -->
                    <div class="teamSlider">
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-offset-1 col-xs-5">
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamOne" src="<?php bloginfo('template_directory');?>/assets/img/dave.png" alt="Dave Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamTwo" src="<?php bloginfo('template_directory');?>/assets/img/terry.png" alt="Terry Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamThree" src="<?php bloginfo('template_directory');?>/assets/img/tracy.png" alt="Tracy Character" />
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamFour" src="<?php bloginfo('template_directory');?>/assets/img/angela.png" alt="Angela Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamFive" src="<?php bloginfo('template_directory');?>/assets/img/andy.png" alt="Andy Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamSix" src="<?php bloginfo('template_directory');?>/assets/img/mary.png" alt="Mary Character" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-offset-1 col-xs-5">
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamSeven" src="<?php bloginfo('template_directory');?>/assets/img/susanna.png" alt="Susanna Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamEight" src="<?php bloginfo('template_directory');?>/assets/img/leo.png" alt="Leo Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamNine" src="<?php bloginfo('template_directory');?>/assets/img/jennifer.png" alt="Jennifer Character" />
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamTen" src="<?php bloginfo('template_directory');?>/assets/img/janet.png" alt="Janet Character" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img" id="teamEleven" src="<?php bloginfo('template_directory');?>/assets/img/character_one.svg" />
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="svg-img lower" id="teamTwelve" src="<?php bloginfo('template_directory');?>/assets/img/character_one.svg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="teamSlider-mobile">
                        <div>
                            <img class="svg-img" id="teamOne-mobile" src="<?php bloginfo('template_directory');?>/assets/img/dave.png" alt="Dave Character" />
                        </div>
                        <div>
                            <img class="svg-img" id="teamTwo-mobile" src="<?php bloginfo('template_directory');?>/assets/img/terry.png" alt="Terry Character" />
                        </div>
                        <div>
                            <img class="svg-img" id="teamThree" src="<?php bloginfo('template_directory');?>/assets/img/tracy.png" alt="Tracy Character" />
                        </div>
                        <div>
                            <img class="svg-img" id="teamFour" src="<?php bloginfo('template_directory');?>/assets/img/angela.png" alt="Angela Character" />
                        </div>
                    </div>

                    <div class="slider-nav">
                        <div>
                            <div class="teamContent-mobile">
                                <h1>David Martin</h1>
                                <h2>Joint Managing Director</h2>
                                <p>My Toy story started in 1995 when I joined Mattel as a graduate trainee, I joined Mega Brands/Mattel in 2008 as UK General manager, becoming Vice President of International in 2011, before leaving to jointly set up a new
                                    exciting adventure with Addo Play in April 2015.</p>
                                <p>My favourite childhood toy was Action Man</p>
                                <p>My favourite Addo toy is Out to Impress Make your own Teddy Bear</p>
                            </div>
                        </div>
                        <div>
                            <div class="teamContent-mobile">
                                <h1>David Martin</h1>
                                <h2>Joint Managing Director</h2>
                                <p>My Toy story started in 1995 when I joined Mattel as a graduate trainee, I joined Mega Brands/Mattel in 2008 as UK General manager, becoming Vice President of International in 2011, before leaving to jointly set up a new
                                    exciting adventure with Addo Play in April 2015.</p>
                                <p>My favourite childhood toy was Action Man</p>
                                <p>My favourite Addo toy is Out to Impress Make your own Teddy Bear</p>
                            </div>
                        </div>
                        <div>
                            <div class="teamContent-mobile">
                                <h1>David Martin</h1>
                                <h2>Joint Managing Director</h2>
                                <p>My Toy story started in 1995 when I joined Mattel as a graduate trainee, I joined Mega Brands/Mattel in 2008 as UK General manager, becoming Vice President of International in 2011, before leaving to jointly set up a new
                                    exciting adventure with Addo Play in April 2015.</p>
                                <p>My favourite childhood toy was Action Man</p>
                                <p>My favourite Addo toy is Out to Impress Make your own Teddy Bear</p>
                            </div>
                        </div>
                        <div>
                            <div class="teamContent-mobile">
                                <h1>David Martin</h1>
                                <h2>Joint Managing Director</h2>
                                <p>My Toy story started in 1995 when I joined Mattel as a graduate trainee, I joined Mega Brands/Mattel in 2008 as UK General manager, becoming Vice President of International in 2011, before leaving to jointly set up a new
                                    exciting adventure with Addo Play in April 2015.</p>
                                <p>My favourite childhood toy was Action Man</p>
                                <p>My favourite Addo toy is Out to Impress Make your own Teddy Bear</p>
                            </div>
                        </div>
                    </div>


                    <div class="team-content js-team-content" id="team-one">
                        <h1>David Martin</h1>
                        <h2>Joint Managing Director</h2>
                        <p>My Toy story started in 1995 when I joined Mattel as a graduate trainee, I joined Mega Brands/Mattel in 2008 as UK General manager, becoming Vice President of International in 2011, before leaving to jointly set up a new exciting
                            adventure with Addo Play in April 2015.</p>
                        <p>My favourite childhood toy was Action Man</p>
                        <p>My favourite Addo toy is Out to Impress Make your own Teddy Bear</p>
                    </div>

                    <div class="team-content" id="team-two">
                        <h1>Text for team No2</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-three">
                        <h1>Text for team No3</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-four">
                        <h1>Text for team No4</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-five">
                        <h1>Text for team No5</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-six">
                        <h1>Text for team No6</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-seven ">
                        <h1>Text for team No7</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-eight">
                        <h1>Text for team No8</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-nine">
                        <h1>Text for team No9</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-ten">
                        <h1>Text for team</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-eleven">
                        <h1>Text for team</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>

                    <div class="team-content" id="team-twelve">
                        <h1>Text for team</h1>
                        <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                        <p> Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Team Modal -->

    </div><!-- END OF FULLPAGE - DO NOT DELETE -->

<?php
// get_sidebar();
get_footer();