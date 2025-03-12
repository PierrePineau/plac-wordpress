<?php
/**
 * Plac functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Plac
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function plac_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Plac, use a find and replace
		* to change 'plac' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'plac', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-h' => esc_html__( 'Header', 'plac' ),
            'menu-u' => esc_html__( 'Liens utiles', 'plac' ),
            'menu-r' => esc_html__( 'Ressources', 'plac' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function plac_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'plac_content_width', 640 );
}
add_action( 'after_setup_theme', 'plac_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
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

/**
 * Enqueue scripts and styles.
 */
function plac_scripts() {
	wp_enqueue_style( 'plac-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'plac-style', 'rtl', 'replace' );

	wp_enqueue_script( 'plac-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'plac_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';
require get_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';
require get_theme_file_path( '/inc/template-tags.php' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';
require get_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';
require get_theme_file_path( '/inc/customizer.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	// require get_template_directory() . '/inc/jetpack.php';
    require get_theme_file_path( '/inc/jetpack.php' );
}

/**
 * PARENT OVERRIDE TYPE TEMPLATE
 */

 function override_page_template($template) {
    if (is_page() && !is_front_page()) {
        $template = get_stylesheet_directory() . '/single-page.php';
    }
    if (is_home() || is_page('blog')) {
        $template = get_stylesheet_directory() . '/home.php';
    }
    if (is_page('contact')) { // Vérifie si la page actuelle a le slug "contact"
        $template = get_stylesheet_directory() . '/page-contact.php';
    }
    return $template;
}
add_filter('template_include', 'override_page_template');

/**
 * PARENT CSS
 */

// function plac_parent_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

//     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/global.css', array( 'parent-style' ) );
// }

// add_action( 'wp_enqueue_scripts', 'plac_parent_styles' );

function enqueue_plac_assets() {
    // Parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Icons Lucide
    wp_enqueue_script('lucidecss', 'https://unpkg.com/lucide@latest', array(), null);
    
    // On ajoute le script de Alpine js
    wp_enqueue_script('alpinejs', 'https://unpkg.com/alpinejs', array(), null, true);

    // On ajoute le script de Splide js
    wp_enqueue_script('splidejs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true);

    // On ajoute le style de Splide js
    wp_enqueue_style('splidecss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null);
    
    // Chemin du fichier manifest.json
	$manifest_path = get_stylesheet_directory() . '/dist/.vite/manifest.json';

	// Vérifie que le fichier manifest existe
	if (file_exists($manifest_path)) {
		// Charger le contenu du manifest
		$manifest = json_decode(file_get_contents($manifest_path), true);
		// Récupérer le chemin du fichier CSS généré dans le manifest
		$css_file = $manifest['main.js']['css'][0] ?? null; // Prend le premier fichier CSS
		$js_file = $manifest['main.js']['file'] ?? null;    // Prend le fichier JS associé

        // var_dump($manifest);
		// Enqueue le fichier CSS s'il est trouvé
		if ($css_file) {
			wp_enqueue_style( 'style-plac', get_stylesheet_directory_uri() . '/dist/' . $css_file, array(), null );
		}

		// Enqueue le fichier JS s'il est trouvé
		if ($js_file) {
			wp_enqueue_script('vite-js', get_stylesheet_directory_uri() . '/dist/' . $js_file, array(), null, true);
        }

        // Récupérer les fichiers de police du manifest
        // if (isset($manifest['main.js']['assets'])) {
        //     foreach ($manifest['main.js']['assets'] as $asset) {
        //         if (preg_match('/\.(woff2?|ttf|eot|svg)$/', $asset)) {
        //             wp_enqueue_style('font-' . basename($asset, '.' . pathinfo($asset, PATHINFO_EXTENSION)), get_stylesheet_directory_uri() . '/dist/' . $asset, array(), null);
        //         }
        //     }
        // }
	}
    
}
add_action('wp_enqueue_scripts', 'enqueue_plac_assets');
add_filter('wpcf7_autop', '__return_false');

