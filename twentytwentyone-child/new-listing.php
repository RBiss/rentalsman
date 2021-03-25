<?php
/**
 * Template Name: Add Listing
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

acf_form_head();
get_header();
?>
<article class="content">
<div class="container">
		<!-- <main id="main" class="site-main"> -->
<header></header>

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content-page', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
        
			endwhile; // End of the loop.
			?>

			

<?php
acf_enqueue_uploader();
?>
</div>
</article>
<footer>
  <?php get_footer(); ?>