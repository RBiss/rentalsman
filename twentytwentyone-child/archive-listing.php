<?php
/**
 * The template for displaying archive listing pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<!-- This is for listing archives - Requires modification -->
	<article class="content px-3 py-5 p-md-5">
<div class="container">
<header class="archive-sort">

<?php echo '<div class="posts-query">';?>  
<?php

$list = $_GET['list_select'];

          if ($list == 'one') {

			
			$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
			$args = array(
				'paged' => $paged,
			'post_type' => 'listing',
			'meta_key' => 'price',
			'orderby'=> 'meta_value_num',
			'order' => 'DESC'
			);
			$query = new WP_Query($args);
			
			
			

            } else if ($list == 'two') {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'meta_key' => 'built',
				'orderby'=> 'meta_value_num',
				'order' => 'DESC'
				);
				$query = new WP_Query($args);
			} else if ($list == 'three') {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'posts-per_page' => 20,
				'meta_key' => 'rent',
				'orderby'=> 'meta_value_num',
				'order' => 'DESC'
				);
				$query = new WP_Query($args);

			} else if ($list == 'four') {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'posts-per_page' => 20,
				'meta_key' => 'country',
				'orderby'=> 'meta_value',
				'order' => 'ASC'
				);
				$query = new WP_Query($args);

			} else if ($list == 'five') {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'posts-per_page' => 20,
				'meta_key' => 'country',
				'orderby'=> 'meta_value',
				'order' => 'DESC'
				);
				$query = new WP_Query($args);

			} else if ($list == 'six') {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'posts-per_page' => 20,
				// 'meta_key' => 'country',
				'orderby'=> 'meta_value',
				'order' => 'DESC'
				);
				$query = new WP_Query($args);

            } else {

				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 	 
				$args = array(
					'paged' => $paged,
				'post_type' => 'listing',
				'posts-per_page' => 20,
				// 'meta_key' => 'price',
				'orderby'=> 'meta_value',
				'order' => 'DESC'
				);
				$query = new WP_Query($args);
				
				

            }



?>
	

</div>
</header>
<div class="container form-select">

<?php
if ($_GET['list_select'] == 'one') {
$one = '<h3>Listed By Price</h3>';
}
elseif ( $_GET['list_select'] == 'two' ) {
	$one = '<h3>Listed By Newest Built</h3>';
}
elseif ( $_GET['list_select'] == 'three' ) {
	$one = '<h3>Listed By Rental Income</h3>';
}
elseif ( $_GET['list_select'] == 'four' ) {
	$one = '<h3>Canadian Listings First</h3>';
}
elseif ( $_GET['list_select'] == 'five' ) {
	$one = '<h3>USA Listings First</h3>';
}
elseif ( $_GET['list_select'] == 'six' ) {
	$one = '<h3>Most Recent Listings</h3>';
}
else {
	$one = '<h3>Most Recent Listings</h3>';
}

echo $one;
?>
<br />
<form>

<select name="list_select" onchange="this.form.submit()">
<option value="">Sort Listings</option>
	<option value="one">List by Price (high to low)</option>
	<option value="two">List by year built (new to old)</option>
	<option value="three">List by rental (high to low)</option>
	<option value="four">Canadian Listings First</option>
	<option value="five">USA Listings First</option>
	<option value="six">Most Recent Listings</option>
</select>

<!-- <input id="submitButton" type="submit" value="Submit" /> -->

</form>
</div>

<?php if ( have_posts() ) : ?>
	<!-- while ( have_posts() ) : -->
	<?php
		while($query -> have_posts()) : $query -> the_post();?>
		
		
	
		
		<div class="left_archive list-thumb">
		<?php twenty_twenty_one_post_thumbnail(); ?>
	   </div>
	        <div class="right_archive">
			
			<br />
				
				
				<br />
				
				<?php the_title( );?><br />
					<?php
					$usa = get_field( "usa" );
					$canada = get_field( "canada" );
					$price = get_field( "rent" );
					$price = get_field( "built" );
				$price = get_field( "price" );
				echo "$$price";?>
				<br />
				<?php
				$value1 = get_field( "description" );
				echo $value1; ?>
		
		    </div>
			
			
			<?php endwhile; ?>
			
			
			<?php else : ?>
			<?php get_template_part( 'template-parts/content/content-none' ); ?>
		<?php endif; ?>
		
		
</div>
			</div>
<div class="list-archive"><H1></H1><br />

<br />
</div>

</article>
<div class="footer">
<?php get_footer() ?>
			</div>