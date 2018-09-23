<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper flex-fill" id="wrapper-footer">

	<div class="container">

		<footer class="site-footer">

			<div class="row secondary" id="footer-sidebar">

				<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

			</div><!-- row end -->

	</footer>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
