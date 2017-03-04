
<?php
/**
 * Template Name: With Featured Image
 *
 * @package ccs
 */

get_header(); ?>
	<div class="main-content-area full">
				<div class="page-featured-image">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full');
					} ?>
				</div>
		<div class="main-page">
			<div id="content" class="site-content inner">

			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div>
	</div>
<?php get_footer(); ?>
