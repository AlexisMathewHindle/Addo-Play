<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package addo-theme
 */

get_header(); ?>

<div class="news-container">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content' );

		

	endwhile; // End of the loop.
	?>

</div>
	


