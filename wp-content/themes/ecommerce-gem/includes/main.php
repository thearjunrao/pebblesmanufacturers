<?php
/**
 * Load files.
 *
 * @package eCommerce_Gem
 */

// Customizer additions.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/customizer.php';

// Load core functions.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/core.php';

// Load helper functions.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/helpers.php';

// Custom template tags for this theme.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/template-tags.php';

// Custom functions that act independently of the theme templates.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/template-functions.php';

// Load widgets.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/widgets/widgets.php';

// Load hooks.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/hooks.php';

// Load woo-commerce overrides.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/woo-overrides.php';

// Load dynamic css.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/dynamic.php';

//TGM Plugin activation.
// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once trailingslashit( get_template_directory() ) . '/includes/tgm/class-tgm-plugin-activation.php';

if ( is_admin() ) {
	// Load about.
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	require_once trailingslashit( get_template_directory() ) . 'includes/theme-info/class-about.php';
	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	require_once trailingslashit( get_template_directory() ) . 'includes/theme-info/about.php';

}