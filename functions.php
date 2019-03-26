<?php
/**
 * financial_improvement functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package financial_improvement
 */

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master
if ( ! function_exists( 'financial_improvement_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function financial_improvement_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on financial_improvement, use a find and replace
		 * to change 'financial_improvement' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'financial_improvement', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'financial_improvement' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'financial_improvement_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'financial_improvement_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function financial_improvement_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'financial_improvement_content_width', 640 );
}
add_action( 'after_setup_theme', 'financial_improvement_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function financial_improvement_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'financial_improvement' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'financial_improvement' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'financial_improvement_widgets_init' );

<<<<<<< HEAD
=======
=======
>>>>>>> master
>>>>>>> master
/**
 * Enqueue scripts and styles.
 */
function financial_improvement_scripts() {
	wp_enqueue_style( 'financial_improvement-style', get_stylesheet_uri() );
  
    wp_enqueue_style('dark-css', get_template_directory_uri() . '/assets/css/dark.css', array(), null);
    wp_enqueue_style('font-icons-css', get_template_directory_uri() . '/assets/css/font-icons.css', array(), null);
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null);
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), null);
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), null);
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), null);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), null);
      wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null);
    
    wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/assets/js/functions.js', array(), 'version 1.4.1', true);
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), null);
      wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), null);
    	wp_enqueue_script('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), null);
    
    
    wp_enqueue_script('google-maps-js', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY' , array(), null, true);

    wp_enqueue_script( 'financial_improvement-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    
    
    
    
    
    
    
    
    

	wp_enqueue_script( 'financial_improvement-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'financial_improvement_scripts' );

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
require get_template_directory() . '/inc/setup.php';
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


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}





   function create_posttype() {
  register_post_type( 'wpll_locations',
    array(
      'labels' => array(
        'name' => __( 'Locations' ),
        'singular_name' => __( 'Locations' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'locations'),
    )
  );
}
add_action( 'init', 'create_posttype' );    

