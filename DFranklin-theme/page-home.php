<?php
/* Template Name: HOME
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		
		<div id="container">
			<div id="content" role="main">

			<!-- OLD CODE NO LONGER USED <div id="homeslider"><?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?></div> -->
				
			<?php echo do_shortcode('[metaslider id="1257"]'); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>



