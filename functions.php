<?php
/**
 * financial_empowerment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package financial_empowerment
 */

/**
 * Enqueue scripts and styles.
 */
function financial_empowerment_scripts() {
	wp_enqueue_style( 'financial_empowerment-style', get_stylesheet_uri() );

	wp_enqueue_script( 'financial_empowerment-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'financial_empowerment-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'foundation-css', get_template_directory_uri() . '/assets/css/vendor/foundation.css', array(), '6.5.1');
	
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), null);
    

	wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), null, true);

	wp_enqueue_script('foundation-js', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array('jquery'), '6.5.1', true);

	wp_enqueue_script('what-input-js', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array('foundation-js'), '5.1.2', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'financial_empowerment_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

