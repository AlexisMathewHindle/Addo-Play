<?php

/**
 * Template Name: Front Page
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
     
			
		<?php get_template_part('template-parts/content','one');?>
		
		<?php get_template_part('template-parts/content','two');?>

		<?php get_template_part('template-parts/content','teamModal');?>

		<?php get_template_part('template-parts/content','three');?>

		<?php get_template_part('template-parts/content','four');?>

		<?php get_template_part('template-parts/content','five');?>

		

		

<?php
// get_sidebar();
get_footer();