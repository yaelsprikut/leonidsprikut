<?php
/**
 * The template for displaying all single posts.
 *
 * @package brawny
 */
global $brawny;
get_header(); 
get_template_part('breadcrumb'); ?>
<?php do_action('brawny_single_flexslider_featured_image'); ?>
	
<div id="content" class="site-content container">
<?php do_action('brawny_two_sidebar_left'); ?>	
				 
    <div id="primary" class="content-area <?php brawny_layout_class();?> columns">

		<main id="main" class="site-main blog-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

				<?php if( get_theme_mod ('social_sharing_box',true)): ?>
				<div class="share-box">
					<h4><?php _e( 'Share this on ...', 'brawny' ); ?></h4>
					<ul>
						<?php if( get_theme_mod('facebook_sb',true) ): ?>
						<li>
							<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<?php endif; ?>
						<?php if( get_theme_mod('twitter_sb',true)): ?>
						<li>
							<a href="http://twitthis.com/twit?url=<?php the_permalink(); ?>">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<?php endif; ?>
						<?php if( get_theme_mod('linkedin_sb',true)): ?>
						<li>
							<a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<?php endif; ?>

						<?php if(get_theme_mod('google-plus_sb',true)): ?>
						<li>
							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<?php endif; ?>
						<?php if( get_theme_mod ('email_sb',true)): ?>
						<li>
							<a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>">
								<i class="fa fa-envelope"></i>
							</a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<?php endif; ?>

				<?php if( get_theme_mod ('author_bio_box')): ?>
				<section class="author-bio clearfix">
					<div class="author-info">
						<div class="avatar">
							<?php echo get_avatar( get_the_author_meta( 'email' ), '72' ); ?>
						</div>
						<div class="description">
							<h4><?php echo __( 'About Author:', 'brawny' ); ?> <?php the_author_posts_link(); ?></h4>
							<?php the_author_meta('description');?>
						</div>
					</div>
					<br class="clear">
				</section>
				
				<?php endif; ?>

			<?php if( get_theme_mod('related_posts') && function_exists( 'brawny_related_posts' ) ) : ?>
				<section class="related-posts clearfix">
					<?php brawny_related_posts(); ?>
						<br class="clear">
				</section>
			
			<?php endif;  ?>

			<?php
					if( get_theme_mod ('comments',true) ) :
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					endif;
				?>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php do_action('brawny_two_sidebar_right'); 

get_footer(); ?>