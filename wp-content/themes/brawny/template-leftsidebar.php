<?php
/**
 * Template Name: Sidebar Left Template
 */

get_header(); 
get_template_part('breadcrumb'); 
 do_action('brawny_before_content'); ?>
		
	<div id="content" class="site-content container">

	 <?php get_sidebar(); ?>	 	

    <div id="primary" class="content-area  eleven columns">
			
			<main id="main" class="site-main" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
		?>
	
		<?php get_footer(); ?>