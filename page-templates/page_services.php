
<?php
/**
 * Template Name: Services
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
			<div id="primary" class="site-content inner">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->


				<?php
					  $args = array(
					    'post_type' => 'services-post', // enter custom post type
					    'orderby' => 'date',
					    'order' => 'ASC',
					  );
					   
					  $loop = new WP_Query( $args );
					  if( $loop->have_posts() ):
					  while( $loop->have_posts() ): $loop->the_post(); global $post;
					    echo '<div class="services"><a class="services-link" href="' . get_post_meta( $post->ID, 'Link', true ) . '">';
					    echo '<div class="services-image">'. get_the_post_thumbnail( $id ).'</div>';
					    echo '<div class="services-description">';
					    echo '<h3>' . get_the_title() . '</h3>';
					    echo '<div class="services-work">'. get_the_content().'</div>';
					    echo '</div></a></div>';
					  endwhile;
					  endif;
				?>

			</div><!-- #content -->
			<div id="secondary" class="services-sidebar">

			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'template-parts/content-services', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
			</div>
			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'ccs' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
<?php get_footer(); ?>
