<?php
/* Template Name: slidestest
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

  <!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
  <div class="container">
    <div id="slides">
      <img src="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations01.jpg" data-image-index="0" data-image-thumb="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations01.jpg">
      <img src="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations02.jpg" data-image-index="1" data-image-thumb="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations02.jpg">
      <img src="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations03.jpg" data-image-index="2" data-image-thumb="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/img/Revelations03.jpg">
    </div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="http://dianewfranklin.com/dwf-wp/wp-content/themes/DFranklin-theme/js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->
  
  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->



  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 520,
        height: 400,
        navigation: {
          active: false,
        },
        pagination: {
          effect: "fade"
        },
        
        callback: {
            loaded: function(number) {
                $( '.slidesjs-pagination-item' ).each( function( index, element ) {
                    var target = $( element ).find( 'a' ),
                        src    = $( '#slides [data-image-index=' + index + ']' ).data( 'image-thumb' );
 
                    $( target ).html( '<img src="' + src + '" alt="" />' );
                });
            },
        },        
        
        effect: {
          fade: {
            speed: 400
          }
        }
      });
    });
    
    $( '.slidesjs-pagination-item' ).each( function( index, element ) {
    var target = $( element ).find( 'a' ),
        src    = $( '#slides [data-image-index=' + index + ']' ).data( 'image-thumb' );
 
    $( target ).html( '<img src="' + src + '" alt="" />' );
});

  </script>
  <!-- End SlidesJS Required -->



			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>



