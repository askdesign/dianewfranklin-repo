<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>


	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous">
					<?php previous_post_link( '%link', '<img src="http://www.dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/images/arrow-next.png" />' ); ?>
					</div>
					
					<div class="nav-next">
					<?php next_post_link( '%link', '<img src="http://www.dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/images/arrow-prev.png" />' ); ?>
					</div>
				
				</div><!-- #nav-above -->
				
<div id="container" class="artwork">
				
					<div class="entry-content">
						<?php the_content(); ?>
						
<div id="dfartworkcontainer">
		<div id="artwork_layout">
			<div id="products">
				<div id="bigimage">
				<?php echo(types_render_field("image-01", array("title"=>"Diane Franklin"))); ?>
				</div>
			
						<div id="artworkinfo">
						<p class="arttitle"><?php echo(types_render_field("artwork-title", array())); ?></p>
						<p class="artdescription"><?php echo(types_render_field("dims-year-media", array())); ?></p>
						</div>	
				<ul class="pagination">
					<li><a href="<?php echo(types_render_field("image-01", array("raw"=>"true","size"=>"large"))); ?>" rel="lightbox[1]"><?php echo(types_render_field("image-01", array("title"=>" "))); ?></a></li>
					<li><a href="<?php echo(types_render_field("image-02", array("raw"=>"true","size"=>"large"))); ?>" rel="lightbox[1]"><?php echo(types_render_field("image-02", array("title"=>" "))); ?></a></li>
					<li><a href="<?php echo(types_render_field("image-03", array("raw"=>"true","size"=>"large"))); ?>" rel="lightbox[1]"><?php echo(types_render_field("image-03", array("title"=>" "))); ?></a></li>
				</ul>
				
			</div>
		
		</div>
	</div>
</div>
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->


				</div><!-- #post-## -->



<?php endwhile; // end of the loop. ?>
