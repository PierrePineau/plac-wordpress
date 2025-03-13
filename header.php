<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plac
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'plac' ); ?></a>

<header id="masthead" class="site-header relative z-20">
    <div class="container">
        <div class="flex items-center w-full py-4 gap-4">
            <!-- #site-logo -->
            <div class="w-24 md:w-[200px]">
                <?php
                the_custom_logo();
                ?>
            </div>
            <!-- #CTA -->
            <div class="ml-auto md:ml-unset md:order-1 flex justify-end flex-shrink-0 self-end gap-4">
                <a href="https://gestion-plac.fr/login" class="btn btn-outline btn-light"><i data-lucide="log-in"></i> <span class="hidden md:inline">Se connecter</span></a>
                <a href="https://gestion-plac.fr/register" class="btn btn-primary"><i data-lucide="arrow-right"></i> <span class="hidden md:inline">Créer un compte</span></a>
            </div>
            
            <!-- #site-navigation -->
            <nav id="site-navigation" class="main-navigation md:w-full" x-data="{ open: false }" :class="{ 'open': open }" @click.away="open = false">
                <button class="menu-toggle btn md:hidden" aria-controls="primary-menu" aria-expanded="false" @click="open = !open"><?php esc_html_e( 'Menu', 'plac' ); ?></button>
                <div class="menu__container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-h',
                        )
                    );
                    ?>
                </div>
                
            </nav>
        </div>
    </div>
</header>
<main>
