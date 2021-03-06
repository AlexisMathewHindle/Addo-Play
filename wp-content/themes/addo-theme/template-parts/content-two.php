<?php

// ADVANCED CUSTOM FIELDS //
// ABOUT US //
$about_sub_title    = get_field('about_sub_title');
$about_us_content   = get_field('about_us_content');

;?>

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
                        <img data-src="<?php bloginfo('template_directory');?>/assets/img/Alien.svg" />
                        <iframe src="https://player.vimeo.com/video/202776948?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-container">
                        <div class="content">
                            <h1>About us</h1>
                            <h2><?php echo $about_sub_title ;?></h2>
                            <?php echo $about_us_content ;?>
                            <button class="cloud-btn" id="js-seeTeam" data-toggle="modal" data-target="#teamModal">Meet our team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF ABOUT US SECTION -->
