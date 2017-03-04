
<?php
/**
 * Template Name: Portfolios Template
 * Description: Page template to display portfolio custom post types 
 * underneath the page content.
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


					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">


						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'ccs' ),
								'after'  => '</div>',
							) );
						?>
						
							<?php
							  $args = array(
							    'post_type' => 'portfolio-post', // enter custom post type
							    'orderby' => 'date',
							    'order' => 'DESC',
							  );
							   
							  $loop = new WP_Query( $args );
							  if( $loop->have_posts() ):
							  while( $loop->have_posts() ): $loop->the_post(); global $post;
							    echo '<div class="portfolio"><a class="portfolio-link" href="' . get_post_meta( $post->ID, 'Link', true ) . '">';
							    echo '<h3>' . get_the_title() . '</h3>';
							    echo '<div class="portfolio-image">'. get_the_post_thumbnail( $id ).'</div>';
							    echo '<div class="portfolio-work">'. get_the_content().'</div>';
							    echo '</div></a>';
							  endwhile;
							  endif;
							?>
						
					</div><!-- .entry-content -->
					
					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'ccs' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div>
	</div>
<?php get_footer(); ?>
