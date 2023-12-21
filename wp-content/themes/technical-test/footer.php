<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technical_Test
 */

?>

	<footer class="footer">
	<img class="footer__logo" src="/wp-content/uploads/2023/12/casino-hotels-logo.svg" alt="Casino Hotels">
	<nav class="navigation">
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
	?>
	</nav>
	<div class="footer__signoff text-center">
		<div class="footer__logo-wrapper">
			<img class="footer__bga-logo" src="/wp-content/uploads/2023/12/be-gamble-aware.svg" alt="Be Gamble Aware Logo">
			<img class="footer__18-logo" src="/wp-content/uploads/2023/12/18_-icon.svg" alt="18+ Logo">
		</div>
		<p class="footer__signoff-text">© <?php echo date("Y"); ?> Top 10 Casinos Worldwide. All rights reserved.</p>
	</div>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
