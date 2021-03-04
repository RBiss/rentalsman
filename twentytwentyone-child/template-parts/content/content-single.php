<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<header class="entry-header alignwide">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="left_header"><?php the_title( '<h1 class="entry-title">','</h1>' );?>
		
	<?php twenty_twenty_one_post_thumbnail(); ?>
	</div>
<div class="right_header"><h1 class="entry-title">$ 
		<?php
		$price = get_field( "price" );
		echo $price;?></h1>
		<br /><br /><br />
		<div><strong>Description:</strong> 
		<?php
		$value1 = get_field( "description" );
		echo $value1; ?></div><br />
		<div><strong>Built:</strong> 
		<?php
		$built = get_field( "built" );
		echo $built; ?></div><br />
		<div><strong>Bedrooms:</strong> 
		<?php
		$bed = get_field( "bedrooms" );
		echo $bed; ?></div><br />
		<div><strong>Bathrooms:</strong> 
		<?php
		$bath = get_field( "bathrooms" );
		echo $bath; ?></div><br />
		<div><strong>Strata:</strong> 
		<?php
		$strata = get_field( "strata" );
		echo $strata; ?></div><br />
		<div><strong>Rent:</strong> 
		<?php
		$rent = get_field( "rent" );
		echo $rent; ?></div><br />
		<div><strong>Tenancy Exp Date:</strong> 
		<?php
		$tenant = get_field( "tenancy" );
		echo $tenant; ?></div><br />
		<div><strong>Utilities:</strong> 
		<?php
		$utes = get_field( "utilities" );
		echo $utes; ?></div><br />
	
</div>
</div>
</header>

<article class="content px-1 py-5 p-md-5">
	    <div class='container'>
		<?php
		$imgp = get_field( "image-primary" );
		$img2 = get_field( "image-two" );
		$img3 = get_field( "image-three" );
		$img4 = get_field( "image-four" );
		$img5 = get_field( "image-five" ); ?>
		<div class="img-list">
			<?php
		echo '<img  class="img-list" src="'.$imgp.'">'; 
		echo '<img  class="img-list" src="'.$img2.'">';
		echo '<img  class="img-list" src="'.$img3.'">'; 
		echo '<img  class="img-list" src="'.$img4.'">';
		echo '<img  class="img-list" src="'.$img5.'">'; ?> </div></div><br />	
		</article>	
<!-- <h1 class="entry-title">', '</h1> -->
<!-- <div class="left_header">
</div>
<div class="right_header"> -->
<!-- <?php
		the_content();?> -->
		
		
<!-- <div> -->
	
		<?php

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>


