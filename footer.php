<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plac
 */

?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="flex flex-col gap-4 justify-start items-start w-full lg:flex-row border-b-light-100 border-b-2 py-8 lg:py-12 lg:gap-8">
            <!-- #site-logo -->
            <div class="lg:w-[500px] flex flex-col gap-4">
                <?= the_custom_logo(); ?>
                <p>Améliorez la communication et la collaboration entre vos équipes avec notre application. </p>
            </div>

            <!-- #menus -->
            <nav class="flex flex-wrap gap-4 lg:justify-center lg:gap-12 w-full">
                <div>
                    <p class="text-lg font-semibold text-dark">Liens utiles</p>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-u',
                        )
                    );
                    ?>
                </div> 

                <div>
                    <p class="text-lg font-semibold text-dark">Ressources</p>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-r',
                        )
                    );
                    ?>
                </div>

                <div>
                    <p class="text-lg font-semibold text-dark">Contact</p>
                    <ul>
                        <li>
                            <a href="#" class="link link-light">+33 7 64 24 54 87</a>
                        </li>
                        <li>
                            <a href="#" class="link link-light">contact@plac.fr</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="lg:w-[200px]">

            </div>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between items-center">
            <p>© <?= date('Y'); ?> Plac. Tous droits réservés</p>
            <ul class="flex gap-2">
                <li><a href="#" class="link link-light">Mentions légales</a></li>
                <li><a href="#" class="link link-light">Politique de confidentialité</a></li>
            </ul>
        </div>
    </div><!-- .site-info -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
