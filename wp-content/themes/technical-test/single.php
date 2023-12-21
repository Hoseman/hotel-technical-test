<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Technical_Test
 */

get_header();
?>

<?php

	
	
?>
	<header class="single-header">
	<div class="single-header__logo-container">
	<?php 
			while ( have_posts() ) :
				the_post();

				$featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				$page_title = get_the_title();
				$address = get_field('casino_hotels_address');

				if ( $featured_image_url ) {
					echo '<img class="single-header__logo" src="' . esc_url( $featured_image_url ) . '" alt="' . esc_attr( $page_title ) . '">';
				} else {
					echo '<p>No featured image available</p>';
				}

				
	?>
	</div>
	<h1 class="single-header__title"><?php echo $page_title; ?></h1>	
	<p class="single-header__address">Address:<br><?php echo $address; ?></p>
	

	<?php endwhile; ?>

	</header>

	<section  class="single container">

		<?php
		while ( have_posts() ) :
			the_post();

			$address = get_field('casino_hotels_address');
			$page_title = get_the_title();


		?>	


			<?php the_content(); ?>

			<a href="/" class="button single__btn"><img class="single__icon" alt="arrow" src="/wp-content/uploads/2023/12/arrow-right.svg"> Return</a>

			<br><br>
			

			
			
			<?php




		endwhile; 
		?>

	</section>

<?php

get_footer();
