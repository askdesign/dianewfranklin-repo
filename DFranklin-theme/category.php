<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	
		<div id="container">
		
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<img src="https://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/images/arrow-next.png" />', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( '<img src="https://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/images/arrow-prev.png" />', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>

			<div id="content" role="main" class="cat">
				
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="catwrap"><?php the_post_thumbnail('thumbnail', $id);?></div>
<?php endwhile; endif; ?>			


			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>

