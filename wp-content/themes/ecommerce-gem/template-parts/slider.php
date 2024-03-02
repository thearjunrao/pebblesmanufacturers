<?php
/**
 * Helper functions.
 *
 * @package eCommerce_Gem
 */
// Slider status.
// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_status = ecommerce_gem_get_option('slider_status');
if (1 !== absint($slider_status)) {
    return;
}

if (!( is_front_page()) && !is_page_template('templates/home.php')) {
    return;
}

// Slider settings.
// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_transition_effect = ecommerce_gem_get_option('slider_transition_effect');
// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_transition_delay = ecommerce_gem_get_option('slider_transition_delay');
// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_pager_status = ecommerce_gem_get_option('slider_pager_status');
// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_autoplay_status = ecommerce_gem_get_option('slider_autoplay_status');

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_readmore_text = ecommerce_gem_get_option('slider_readmore_text');

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slick_args = array(
    'dots' => true,
    'arrows' => false,
    'slidesToShow' => 1,
    'slidesToScroll' => 1,
);

if (1 === absint($slider_autoplay_status)) {
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
    $slick_args['autoplay'] = true;
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
    $slick_args['autoplaySpeed'] = 1000 * absint($slider_transition_delay);
}

if ('fade' === $slider_transition_effect) {
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
    $slick_args['fade'] = true;
} else {
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
    $slick_args['fade'] = false;
}

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slick_args_encoded = wp_json_encode($slick_args);

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_number = 5;

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$page_ids = array();

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
for ($i = 1; $i <= $slider_number; $i++) {
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
    $page_id = ecommerce_gem_get_option("slider_page_$i");
    if (absint($page_id) > 0) {
        // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
        $page_ids[] = absint($page_id);
    }
}

if (empty($page_ids)) {
    return;
}

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_args = array(
    'posts_per_page' => count($page_ids),
    'orderby' => 'post__in',
    'post_type' => 'page',
    'post__in' => $page_ids,
    'meta_query' => array(
        array('key' => '_thumbnail_id'
        ),
    ),
);

// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
$slider_posts = new WP_Query($slider_args);

if ($slider_posts->have_posts()) :
    ?>

    <div class="main-slider" data-slick='<?php
    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo $slick_args_encoded; ?>'>

        <?php
        // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
        $count = 1;

        while ($slider_posts->have_posts()) :

            $slider_posts->the_post();

            // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
            $caption_position = ecommerce_gem_get_option('caption_position_' . $count);

            // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
            $readmore_text = ecommerce_gem_get_option('button_text_' . $count);

            // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
            $readmore_link = ecommerce_gem_get_option('button_link_' . $count);

            // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
            $image_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

            ?>
            <div class="item caption-position-<?php echo esc_attr($caption_position); ?>" style="background: url(<?php echo esc_url($image_array[0]); ?>); background-size: cover; background-position: center center;">

                <div class="slider-caption">
                    <div class="container">
                        <div class="caption-wrap">
                            <div class="caption-inner">
                                <span><?php the_title(); ?></span>
                                <div class="slider-meta"><?php the_content(); ?></div>
                                <?php if (!empty($readmore_text) && !empty($readmore_link)) { ?>
                                    <a href="<?php echo esc_url($readmore_link); ?>" class="button slider-button"><?php echo esc_html($readmore_text); ?></a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div><!-- .caption-wrap -->
                </div><!-- .slider-caption -->

            </div>

            <?php
            $count++;

        endwhile;

        wp_reset_postdata();
        ?>

    </div> <!-- #main-slider -->
    <?php

    
		endif;