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

	<div class="container-fluid">
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
							<?php echo get_the_post_thumbnail();?>
							<?php
						}
					}
				?>
			</div>
			<div class="col-md-6">
				<?php
					while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content' );

							

					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>



	

</div>

<?php get_footer();?>
	


