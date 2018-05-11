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

				<div class="col-md-4" id="footer-sidebar1">
					<?php
						if(is_active_sidebar('footer-sidebar-1')){
							dynamic_sidebar('footer-sidebar-1');
						}
					?>
				</div>
				<div class="col-md-4" id="footer-sidebar2">
					<?php
						if(is_active_sidebar('footer-sidebar-2')){
							dynamic_sidebar('footer-sidebar-2');
						}
					?>
				</div>
				<div class="col-md-4" id="footer-sidebar3">
					<?php
						if(is_active_sidebar('footer-sidebar-3')){
							dynamic_sidebar('footer-sidebar-3');
						}
					?>
				</div>

			</div><!-- row end -->

	</footer>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
