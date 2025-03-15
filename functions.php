<?php
/**
 * Plac functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Plac
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function plac_setup() {
	load_theme_textdomain( 'plac', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-h' => esc_html__( 'Header', 'plac' ),
			'menu-u' => esc_html__( 'Liens utiles', 'plac' ),
			'menu-r' => esc_html__( 'Ressources', 'plac' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'plac_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'plac_setup' );

function plac_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'plac_content_width', 640 );
}
add_action( 'after_setup_theme', 'plac_content_width', 0 );

function plac_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'plac' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'plac' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'plac_widgets_init' );

function plac_scripts() {
	wp_enqueue_style( 'plac-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'plac-style', 'rtl', 'replace' );
	wp_enqueue_script( 'plac-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'plac_scripts' );

require get_theme_file_path( '/inc/custom-header.php' );
require get_theme_file_path( '/inc/template-tags.php' );
require get_theme_file_path( '/inc/template-functions.php' );
require get_theme_file_path( '/inc/customizer.php' );

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_theme_file_path( '/inc/jetpack.php' );
}

function override_page_template($template) {
	if ( is_page() && ! is_front_page() ) {
		$template = get_stylesheet_directory() . '/single-page.php';
	}
	if ( is_home() || is_page( 'blog' ) ) {
		$template = get_stylesheet_directory() . '/home.php';
	}
	if ( is_page( 'contact' ) ) {
		$template = get_stylesheet_directory() . '/page-contact.php';
	}
	return $template;
}
add_filter( 'template_include', 'override_page_template' );

// function plac_parent_styles() {
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// 	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/global.css', array( 'parent-style' ) );
// }
// add_action( 'wp_enqueue_scripts', 'plac_parent_styles' );

function enqueue_plac_assets() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'lucide', 'https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js', array(), null, true );
	wp_add_inline_script( 'lucide', 'window.addEventListener("load", function(){ window.lucide.createIcons(); });' );
	wp_enqueue_script( 'alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js', array(), null, true );
	wp_enqueue_script( 'splidejs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true );
	wp_enqueue_style( 'splidecss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null );
	$manifest_path = get_stylesheet_directory() . '/dist/.vite/manifest.json';
	if ( file_exists( $manifest_path ) ) {
		$manifest = json_decode( file_get_contents( $manifest_path ), true );
		$css_file = $manifest['main.js']['css'][0] ?? null;
		$js_file = $manifest['main.js']['file'] ?? null;
		if ( $css_file ) {
			wp_enqueue_style( 'style-plac', get_stylesheet_directory_uri() . '/dist/' . $css_file, array(), null );
		}
		if ( $js_file ) {
			wp_enqueue_script( 'vite-js', get_stylesheet_directory_uri() . '/dist/' . $js_file, array(), null, true );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_plac_assets' );
add_filter( 'wpcf7_autop_or_not', '__return_false' );
?>
