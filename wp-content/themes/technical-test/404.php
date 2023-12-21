<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Technical_Test
 */

get_header();
?>



		<section class="error-404 not-found">

		<div class="banner">

			<div class="banner__wrapper">


				<img class="banner__logo" src="https://technicaltest.achcreative.co.uk/wp-content/uploads/2023/12/casino-hotels-logo.svg" alt="logo">
				<h1 class="banner__heading"><?php esc_html_e( 'That page can&rsquo;t be found.', 'technical-test' ); ?></h1>
				<a class="button banner__btn" href="/">Take me home <img class="banner__icon" alt="arrow" src="/wp-content/uploads/2023/12/arrow-down.svg"></a>

			</div>

			<img class="banner__img" src="https://technicaltest.achcreative.co.uk/wp-content/uploads/2023/12/banner.jpg" alt="404">
			
		</div>





			<div class="container error-404__container">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'technical-test' ); ?></p>

					<?php
					get_search_form();

	
					?>



			</div>
		</section>



<?php
get_footer();
