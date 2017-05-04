<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package addo-theme
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="error-img">
				<img src="<?php bloginfo('template_directory');?>/assets/img/addo_feature.png"/>
			</div>
			<div class="error-title">
				<h1><span>Oops...</span></h1>
				<h1>It looks like nothing was found on this page</h1>
				<h2>Maybe try one of the pages below</h2>
				<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
			</div>
		</div>
	</div>
</div>	

<?php get_footer(); ?>
