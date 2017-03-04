
<?php
/**
 * Template Name: Content-Sidebar
 *
 * @package ccs
 */

get_header(); ?>
	<div class="main-content-area full">
		<div class="main-page">
			<div id="content" class="site-content inner">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
			</div><!-- #content -->
		</div>
	</div>
<?php get_footer(); ?>
