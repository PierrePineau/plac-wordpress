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
<?php get_template_part('template-parts/part', 'try'); ?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="flex flex-col gap-4 justify-start items-start w-full lg:flex-row py-8 lg:gap-8">
            <!-- #site-logo -->
            <div class="lg:w-[500px] flex flex-col gap-4">
                <?= the_custom_logo(); ?>
                <p>Améliorez la communication et la collaboration entre vos équipes avec notre application. </p>

                <!-- #social -->
                <ul class="flex gap-4 justify-center lg:justify-start w-full">
                    <li><a href="#" class="" title="Instagram"></a><i data-lucide="instagram"></i></li>
                    <li><a href="#" class="" title="LinkedIn"><i data-lucide="linkedin"></i></a></li>
                </ul>
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
                    <p class="text-lg font-semibold text-dark">Fonctionnalités</p>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-f',
                        ),
                    );
                    ?>
                </div>

                <div>
                    <p class="text-lg font-semibold text-dark">Ressources</p>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-r',
                        ),
                        'footer'
                    );
                    ?>
                </div>

                <div>
                    <p class="text-lg font-semibold text-dark">Contact</p>
                    <ul>
                        <li>
                            <a href="#" class="">+33 7 64 24 54 87</a>
                        </li>
                        <li>
                            <a href="#" class="">contact@plac.fr</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- #newsletter -->
        <div class="flex flex-col gap-4 justify-center lg:justify-start w-full">
            <p class="text-lg font-semibold text-dark">Suivre nos dernières actualités</p>
            <form action="#" method="post" class="flex gap-4 md:max-w-xs">
                <input type="email" name="email" placeholder="Votre adresse email" class="input input-primary" />
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between items-center border-t-light-100 border-t-2 py-4">
            <p class="text-neutral-400">© <?= date('Y'); ?> Plac. Tous droits réservés</p>
            <ul class="flex gap-2">
                <li><a href="/mentions-legales" class="link text-neutral-400">Mentions légales</a></li>
                <li><a href="/politique-de-confidentialite" class="link text-neutral-400">Politique de confidentialité</a></li>
            </ul>
        </div>
    </div><!-- .site-info -->
    <script>
        lucide.createIcons();
    </script>
</footer>

<?php wp_footer(); ?>

</body>
</html>
