<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Plac
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header flex flex-col gap-4">
		<?php
		if ( is_singular() ) :
            $post_type = get_post_type_object(get_post_type());
            if ($post_type && !is_wp_error($post_type)) {
                echo '<p class="subtitle uppercase text-center">' . esc_html($post_type->labels->name) . '</p>';
            }
			the_title( '<h1 class="entry-title heading text-center">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
	</header><!-- .entry-header -->

    
	<section class="entry-content container py-4">
        <?php plac_post_thumbnail(); ?>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'plac' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plac' ),
				'after'  => '</div>',
			)
		);
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php plac_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
