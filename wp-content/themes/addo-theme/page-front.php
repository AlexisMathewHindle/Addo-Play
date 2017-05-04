<?php

/**
 * Template Name: Main Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

// ADVANCED CUSTOM FIELDS //

// TEAM MODAL CONTENT //
$team_one_name  = get_field('team_one_name');
$team_one_title = get_field('team_one_title');
$team_one_content = get_field('team_one_content');
$team_two_name  = get_field('team_two_name');
$team_two_title = get_field('team_two_title');
$team_two_content = get_field('team_two_content');
$team_three_name  = get_field('team_three_name');
$team_three_title = get_field('team_three_title');
$team_three_content = get_field('team_three_content');
$team_four_name  = get_field('team_four_name');
$team_four_title = get_field('team_four_title');
$team_four_content = get_field('team_four_content');
$team_five_name  = get_field('team_five_name');
$team_five_title = get_field('team_five_title');
$team_five_content = get_field('team_five_content');
$team_sixth_name  = get_field('team_sixth_name');
$team_sixth_title = get_field('team_sixth_title');
$team_sixth_content = get_field('team_sixth_content');
$team_seven_name  = get_field('team_seven_name');
$team_seven_title = get_field('team_seven_title');
$team_seven_content = get_field('team_seven_content');
$team_eight_name  = get_field('team_eight_name');
$team_eight_title = get_field('team_eight_title');
$team_eight_content = get_field('team_eight_content');
$team_nine_name  = get_field('team_nine_name');
$team_nine_title = get_field('team_nine_title');
$team_nine_content = get_field('team_nine_content');
$team_ten_name  = get_field('team_ten_name');
$team_ten_title = get_field('team_ten_title');
$team_ten_content = get_field('team_ten_content');
$team_eleven_name  = get_field('team_eleven_name');
$team_eleven_title = get_field('team_eleven_title');
$team_eleven_content = get_field('team_eleven_content');
$team_twelve_name  = get_field('team_twelve_name');
$team_twelve_title = get_field('team_twelve_title');
$team_twelve_content = get_field('team_twelve_content');

// BRANDS MODAL CONTENT //
$snuggle_bunnies_left_content = get_field('snuggle_bunnies_left_content');
$snuggle_bunnies_content      = get_field('snuggle_bunnies_content');
$pitter_patter_left_content   = get_field('pitter_patter_left_content');
$pitter_patter_content        = get_field('pitter_patter_content');
$storm_blasters_left_content  = get_field('storm_blasters_left_content');
$storm_blasters_content       = get_field('storm_blasters_content');
$ready_steady_left_content    = get_field('ready_steady_left_content');
$ready_steady_content         = get_field('ready_steady_content');
$bobble_it_left_content       = get_field('bobble_it_left_content');
$bobble_it_content            = get_field('bobble_it_content');
$awesome_animals_left_content = get_field('awesome_animals_left_content');
$awesome_animals_content      = get_field('awesome_animals_content');
$busy_me_left_content         = get_field('busy_me_left_content');
$busy_me_content              = get_field('busy_me_content');
$unique_boutique_left_content = get_field('unique_boutique_left_content');
$unique_boutique_content      = get_field('unique_boutique_content');
$out_of_the_box_left_content  = get_field('out_of_the_box_left_content');
$out_of_the_box_content       = get_field('out_of_the_box_content');
$out_to_impress_left_content  = get_field('out_to_impress_left_content');
$out_to_impress_content       = get_field('out_to_impress_content');
$out_there_left_content       = get_field('out_there_left_content');
$out_there_content            = get_field('out_there_content');
$experimake_left_content      = get_field('experimake_left_content');
$experimake_content           = get_field('experimake_content');



get_header(); ?>


<div id="fullpage">

<?php get_template_part('template-parts/content','one');?>

<?php get_template_part('template-parts/content','two');?>

<?php get_template_part('template-parts/content','three');?>

<?php get_template_part('template-parts/content','four');?>

<?php get_template_part('template-parts/content','five');?>

    


    

    


    

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
        <div class="footer-container footer-container--two">
           <p style="float: left;">	&copy; <?php echo date("Y"); ?> Copyright. <span>All rights reserved.</span></p> 
           <p style="float: right;">Please <a href="<?php get_site_url();?>/privacy-policy/">click here</a> to our the privacy policy</p>

        </div>
        <div class="footer-container footer-container--three"></div>
        <div class="footer-container footer-container--four"></div>

        <!-- END OF FOOTER -->
    </div>
</div><!-- END OF FULLPAGE - DO NOT DELETE -->

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
                                    <!--<div class="col-xs-3">
                                        <img class="svg-img lower" id="teamTwelve" src="<?php bloginfo('template_directory');?>/assets/img/character_one.svg" />
                                    </div>-->
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
                    <div>
                        <img class="svg-img" id="teamFive" src="<?php bloginfo('template_directory');?>/assets/img/andy.png" alt="Andy Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamSix" src="<?php bloginfo('template_directory');?>/assets/img/mary.png" alt="Mary Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamSeven" src="<?php bloginfo('template_directory');?>/assets/img/susanna.png" alt="Susanna Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamEight" src="<?php bloginfo('template_directory');?>/assets/img/leo.png" alt="Leo Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamNine" src="<?php bloginfo('template_directory');?>/assets/img/jennifer.png" alt="Jennifer Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamTen" src="<?php bloginfo('template_directory');?>/assets/img/janet.png" alt="Janet Character" />
                    </div>
                    <div>
                        <img class="svg-img" id="teamEleven" src="<?php bloginfo('template_directory');?>/assets/img/character_one.svg" />
                    </div>
                </div>

                <div class="slider-nav">
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_one_name ;?></h1>
                            <h2><?php echo $team_one_title;?></h2>
                            <?php echo $team_one_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                           <h1><?php echo $team_two_name ;?></h1>
                            <h2><?php echo $team_two_title;?></h2>
                            <?php echo $team_two_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_three_name ;?></h1>
                            <h2><?php echo $team_three_title;?></h2>
                            <?php echo $team_three_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_four_name ;?></h1>
                            <h2><?php echo $team_four_title;?></h2>
                            <?php echo $team_four_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_five_name ;?></h1>
                            <h2><?php echo $team_five_title;?></h2>
                            <?php echo $team_five_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_sixth_name ;?></h1>
                            <h2><?php echo $team_sixth_title;?></h2>
                            <?php echo $team_sixth_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_seven_name ;?></h1>
                            <h2><?php echo $team_seven_title;?></h2>
                            <?php echo $team_seven_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_eight_name ;?></h1>
                            <h2><?php echo $team_eight_title;?></h2>
                            <?php echo $team_eight_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_nine_name ;?></h1>
                            <h2><?php echo $team_nine_title;?></h2>
                            <?php echo $team_nine_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_ten_name ;?></h1>
                            <h2><?php echo $team_ten_title;?></h2>
                            <?php echo $team_ten_content;?>
                        </div>
                    </div>
                    <div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_eleven_name ;?></h1>
                            <h2><?php echo $team_eleven_title;?></h2>
                            <?php echo $team_eleven_content;?>
                        </div>
                    </div>
                    <!--<div>
                        <div class="teamContent-mobile">
                            <h1><?php echo $team_twelve_name ;?></h1>
                            <h2><?php echo $team_twelve_title;?></h2>
                            <?php echo $team_twelve_content;?>
                        </div>
                    </div>-->
                </div>


                <div class="team-content js-team-content" id="team-one">
                    <h1><?php echo $team_one_name ;?></h1>
                    <h2><?php echo $team_one_title;?></h2>
                    <?php echo $team_one_content;?>
                </div>

                <div class="team-content" id="team-two">
                    <h1><?php echo $team_two_name ;?></h1>
                    <h2><?php echo $team_two_title;?></h2>
                    <?php echo $team_two_content;?>
                </div>

                <div class="team-content" id="team-three">
                    <h1><?php echo $team_three_name ;?></h1>
                    <h2><?php echo $team_three_title;?></h2>
                    <?php echo $team_three_content;?>
                </div>

                <div class="team-content" id="team-four">
                    <h1><?php echo $team_four_name ;?></h1>
                    <h2><?php echo $team_four_title;?></h2>
                    <?php echo $team_four_content;?>
                </div>

                <div class="team-content" id="team-five">
                    <h1><?php echo $team_five_name ;?></h1>
                    <h2><?php echo $team_five_title;?></h2>
                    <?php echo $team_five_content;?>
                </div>

                <div class="team-content" id="team-six">
                    <h1><?php echo $team_sixth_name ;?></h1>
                    <h2><?php echo $team_sixth_title;?></h2>
                    <?php echo $team_sixth_content;?>
                </div>

                <div class="team-content" id="team-seven">
                    <h1><?php echo $team_seven_name ;?></h1>
                    <h2><?php echo $team_seven_title;?></h2>
                    <?php echo $team_seven_content;?>
                </div>

                <div class="team-content" id="team-eight">
                    <h1><?php echo $team_eight_name ;?></h1>
                    <h2><?php echo $team_eight_title;?></h2>
                    <?php echo $team_eight_content;?>
                </div>

                <div class="team-content" id="team-nine">
                    <h1><?php echo $team_nine_name ;?></h1>
                    <h2><?php echo $team_nine_title;?></h2>
                    <?php echo $team_nine_content;?>
                </div>

                <div class="team-content" id="team-ten">
                    <h1><?php echo $team_ten_name ;?></h1>
                    <h2><?php echo $team_ten_title;?></h2>
                    <?php echo $team_ten_content;?>
                </div>

                <div class="team-content" id="team-eleven">
                    <h1><?php echo $team_eleven_name ;?></h1>
                    <h2><?php echo $team_eleven_title;?></h2>
                    <?php echo $team_eleven_content;?>
                </div>

                <!--<div class="team-content" id="team-twelve">
                    <h1><?php echo $team_twelve_name ;?></h1>
                    <h2><?php echo $team_twelve_title;?></h2>
                    <?php echo $team_twelve_content;?>
                </div>-->
            </div>
        </div>
    </div>
</div>

<!-- End of Team Modal -->

<!-- Brands Modal -->
<div class="modal fade" id="brandsModal" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--<h4 class="modal-title ">Modal Header</h4>-->
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandOne" data-to="1" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_one.png" class="img-responsve first-img" alt="Wacky Hair Dough" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/wacky_hair_dough.png" class="img-responsve second-img" alt="Wacky Hair Dough">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="brand-container">
                                <div class="brand-btn brandTwo" data-to="2" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_nine.png" class="img-responsve third-img" alt="Storm Blasters" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/storm_blasters_pack.png" class="img-responsve fourth-img" alt="Storm Blasters">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandThree" data-to="3" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_ten.png" class="img-responsve fifth-img" alt="Snuggle Bunnies" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/snuggle_buddies_lifestle.png" class="img-responsve sixth-img" alt="Snuggle Bunnies" /> </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandFour" data-to="4" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_four.png" class="img-responsve seventh-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve eigth-img" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandFive" data-to="5" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_five.png" class="img-responsve nineth-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve tenth-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandSix" data-to="6" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_six.png" class="img-responsve eleventh-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve twelfth-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandSeven" data-to="7" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_seven.png" class="img-responsv thirteenth-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve fourteenth-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandEight" data-to="8" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_eight.png" class="img-responsve fifteenth-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve sixteenth-img" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandNine" data-to="9" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_two.png" class="img-responsve seventeenth-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve eighteenth-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandTen" data-to="10" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/brand_three.png" class="img-responsve nineteenth-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve twentieth-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandEleven" data-to="11" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/coming_soon_fill.png" class="img-responsve twentFirst-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve twentySecond-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandTwelve" data-to="12" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/coming_soon_fill.png" class="img-responsve twentyThird-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve twentyFourth-img" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brand Slider Modal -->
<div class="modal fade" id="brandSlider" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="brandsliderCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Brand Slider -->
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                <?php echo $ready_steady_left_content ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/RSD_logo.png" />
                                                <h1>Ready Steady Dough</h1>
                                                <?php echo $ready_steady_content;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                <?php echo $storm_blasters_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/stormblaster_logo.png" />
                                                <h1>Storm Blasters</h1>
                                                <?php echo $storm_blasters_content;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                 <?php echo $snuggle_bunnies_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/SB_logo.png" />
                                                <h1>Snuggle Bunnies</h1>
                                                <?php echo $snuggle_bunnies_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $out_to_impress_left_content ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OTI_logo.png" />
                                                <h1>Out To Impress</h1>
                                               <?php echo $out_to_impress_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $awesome_animals_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/AA_logo.png" />
                                                <h1>Awesome Animals</h1>
                                               <?php echo $awesome_animals_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                <?php echo $pitter_patter_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/addo_pitter_patter_Logo.png" />
                                                <h1>Pitter Patter Pets</h1>
                                                <?php echo $pitter_patter_content;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                <?php echo $out_there_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OT_logo.png" />
                                                <h1>Out There</h1>
                                                <?php echo $out_there_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $busy_me_left_content;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/BM_logo.png" />
                                                <h1>Busy Me</h1>
                                                <?php echo $busy_me_content;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                                <?php echo $out_of_the_box_left_content ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OOTB_logo.png" />
                                                <h1>Out Of The Box</h1>
                                                <?php echo $out_of_the_box_content;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $unique_boutique_left_content ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/UB_logo.png" />
                                                <h1>Unique Boutique</h1>
                                                <?php echo $unique_boutique_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $bobble_it_left_content ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/UB_logo.png" />
                                                <h1>Nickelodeon Bobble It</h1>
                                                <?php echo $bobble_it_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-content--left">
                                               <?php echo $experimake_left_content  ;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/UB_logo.png" />
                                                <h1>Experimake</h1>
                                                <?php echo $unique_boutique_content ;?>
                                                <button class="cloud-btn">Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END OF BRANDSLIDER CAROUSEL -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#brandsliderCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#brandsliderCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brands Modal -->
    <div class="modal fade contactModal" id="contactModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!--<h4 class="modal-title ">Modal Header</h4>-->
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-container">
                                    <img id="main-cloud" src="<?php bloginfo('template_directory');?>/assets/img/cloud.svg" class="img-responsive" />
                                    <img id="cloud-one" src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                    <img id="cloud-two" src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                    <img id="cloud-three" src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                    <img id="cloud-four" src="<?php bloginfo('template_directory');?>/assets/img/cloud.png" class="img-responsive" />
                                    <img id="star-one" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                    <img id="star-two" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                    <img id="star-three" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                    <img id="star-four" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                    <img id="star-five" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />
                                    <img id="star-six" src="<?php bloginfo('template_directory');?>/assets/img/star_fill.png" class="img-responsive" />

                                    <!--<form action="#">
                                        <div class="form-content">
                                            <input type="text" name="firstname" placeholder="Name" />
                                            <input type="text" name="company" placeholder="Company" />
                                            <input type="email" name="email" placeholder="Email" />
                                            <textarea rows="6 " cols="50" placeholder="Message"></textarea>
                                        </div>
                                        <img src="<?php bloginfo('template_directory');?>/assets/img/cloud_submit.png" alt=" " />
                                        <input type="submit" value="send "> 
                                    </form>-->
                                    <?php echo do_shortcode( '[contact-form-7 id="29" title="Main Contact Form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
// get_sidebar();
get_footer();