<?php
/**
 * Footer widgets.
 *
 * @package eCommerce_Gem
 */

if ( is_active_sidebar( 'footer-1' ) ||
	 is_active_sidebar( 'footer-2' ) ||
	 is_active_sidebar( 'footer-3' ) ||
	 is_active_sidebar( 'footer-4' ) ) :
?>

	<aside id="footer-widgets" class="widget-area" role="complementary">
		<div class="container">
			<?php
			// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
				$column_count = 0;
				// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
				for ( $i = 1; $i <= 4; $i++ ) {
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						$column_count++;
					}
				}
			 ?>
			<div class="inner-wrapper">
				<?php
				// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
				$column_class = 'widget-column footer-active-' . absint( $column_count );
				// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
				for ( $i = 1; $i <= 4 ; $i++ ) {
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						?>
						<div class="<?php
						// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo $column_class; ?>">
							<?php dynamic_sidebar( 'footer-' . $i ); ?>
						</div>
						<?php
					}
				}
				?>
			</div><!-- .inner-wrapper -->
		</div><!-- .container -->
	</aside><!-- #footer-widgets -->

<?php endif;
