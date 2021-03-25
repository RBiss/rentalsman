<!--This file displays a single view hailer linked through from archive-view_hailer-->
<?php get_header() ?>
	<article class="content px-3 py-5 p-md-5">
<div class="container">
		 <main id="main" class="site-main"> 
<header></header>

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
$username=get_field('username');
echo $username;
				get_template_part( 'template-parts/content/content-hailer-page', 'page');

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