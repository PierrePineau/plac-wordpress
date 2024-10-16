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
	<footer id="colophon" class="site-footer">
		<div class="site-info">
             <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-u',
                    )
                );

                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-r',
                    )
                );

                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-c',
                    )
                );
                ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'plac' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'plac' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'plac' ), 'plac', '<a href="http://underscores.me/">PierrePineau</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
