<?php
/**
 * Breadcrumbs.
 *
 * @package eCommerce_Gem
 */

// Bail if front page.
if ( is_front_page() || is_page_template( 'templates/home.php' ) ) {
	return;
}

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$breadcrumb_type = ecommerce_gem_get_option( 'breadcrumb_type' );
if ( 'disable' === $breadcrumb_type ) {
	return;
}

if ( ! function_exists( 'ecommerce_gem_breadcrumb_trail' ) ) {
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	require_once trailingslashit( get_template_directory() ) . '/assets/vendor/breadcrumbs/breadcrumbs.php';
}
?>

<div id="breadcrumb">
	<div class="container">
		<?php

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
		$breadcrumb_text = ecommerce_gem_get_option( 'breadcrumb_text' );

		// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
			
		);

		if( !empty( $breadcrumb_text ) ){

			// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
			$breadcrumb_args['labels']['home'] = esc_html( $breadcrumb_text );
		}

		ecommerce_gem_breadcrumb_trail( $breadcrumb_args );
		
		?>
	</div><!-- .container -->
</div><!-- #breadcrumb -->
