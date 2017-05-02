<?php

/**
 * Template Name: Main Page
 *
 * @package WordPress
 * @subpackage Addo Play
 * @since Addo Play 1.0
 */

// ADVANCED CUSTOM FIELDS //

// THE TEAM //


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
        <div class="footer-container footer-container--two"></div>
        <div class="footer-container footer-container--three"></div>
        <div class="footer-container footer-container--four"></div>

        <!-- END OF FOOTER -->
    </div>
</div><!-- END OF FULLPAGE - DO NOT DELETE -->

<?php get_template_part('content', 'team');?>

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
                                <div class="brand-btn brandTen" data-to="11" data-toggle="modal" data-target="#brandSlider">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/coming_soon_fill.png" class="img-responsve twentFirst-img" />
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/toy_fill.png" class="img-responsve twentySecond-img" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="brand-container">
                                <div class="brand-btn brandTen" data-to="12" data-toggle="modal" data-target="#brandSlider">
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/RSD_logo.png" />
                                                <h1>Ready Steady Dough</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/stormblaster_logo.png" />
                                                <h1>Storm Blasters</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/SB_logo.png" />
                                                <h1>Snuggle Bunnies</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OTI_logo.png" />
                                                <h1>Out To Impress</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/AA_logo.png" />
                                                <h1>Awesome Animals</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/addo_pitter_patter_Logo.png" />
                                                <h1>Pitter Patter Pets</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OT_logo.png" />
                                                <h1>Out There</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/BM_logo.png" />
                                                <h1>Busy Me</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/OOTB_logo.png" />
                                                <h1>Out Of The Box</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                                                <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-content--right">
                                                <img src="<?php bloginfo('template_directory');?>/assets/img/UB_logo.png" />
                                                <h1>Unique Boutique</h1>
                                                <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value. Children are at the center of everything we do. Attention to detail is paramout from the toy
                                                    itself to the attractive, celar and informative packaging. Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we
                                                    create.
                                                </p>
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
                            <div class="col-md-6">
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

                                    <form action="#">
                                        <div class="form-content">
                                            <input type="text" name="firstname" placeholder="Name" />
                                        </div>
                                        <div class="form-content">
                                            <div class="form-content ">
                                                <input type="text" name="company" placeholder="Company" />
                                            </div>
                                            <div class="form-content">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                            <div class="form-content">
                                                <textarea rows="6 " cols="50" placeholder="Message"></textarea>
                                            </div>
                                            <img src="assets/img/cloud_submit.png" alt=" " />
                                            <input type="submit" value="send">
                                            <textarea rows="6" cols="50" placeholder="Message"></textarea>
                                        </div>
                                        <img src="assets/img/cloud_submit.png" alt=" " />
                                        <input type="submit" value="send "> 
                                    </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-container">
                                <div class="content">
                                    <h1>Contact Us</h1>
                                    <p>We aim to create intelligently designed, safe, ethically sourcesd, trustworthy toys at outstanding value.</p>
                                    <p>Children are at the center of everything we do. Attention to detail is paramout from the toy itself to the attractive, celar and informative packaging.</p>
                                    <p>Addo Play is driven by an ambitious team of staff whose passion, ethics, energy and fun are channelled into the wide range of product we create.</p>
                                    <button class="cloud-btn" id="js-findUs" data-toggle="modal" data-target="#contactModal"><p class="cloud-p">Find Us</p></button>
                                </div>
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