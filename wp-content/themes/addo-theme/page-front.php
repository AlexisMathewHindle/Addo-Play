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
                        <img src="assets/img/french_flag.svg" alt="" />
                    </li>
                    <li>
                        <img class="spain" src="assets/img/spain_flag.svg" alt="" />
                    </li>
                    <li>
                        <img src="assets/img/french_flag.svg" alt="" />
                    </li>
                    <li>
                        <img class="spain" src="assets/img/spain_flag.svg" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php
// get_sidebar();
get_footer();