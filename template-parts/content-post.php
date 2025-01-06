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
	<header class="entry-header flex flex-col gap-4 container  py-4">
		<?php
		if ( is_singular() ) :
            echo '<div class="flex flex-wrap items-center gap-2 mx-center justify-center">';
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo '<p class="subtitle post-category text-center"><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></p>';
                echo '<span>·</span>';
            }
            echo '<p class="post-date text-center">' . get_the_date( 'd/m/Y' ) . '</p>';
            echo '</div>';
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
