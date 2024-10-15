<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

<section class="section section-hero">
    <div class="container">
        <p class="text-primary"><?php the_field('hero_subtitle'); ?></p>
        <?php the_field('hero_title'); ?>
        <p><?php the_field('hero_description'); ?></p>

        <div class="flex gap-4">
            <a href="#" class="btn btn-primary">Nos fonctionnalités</a>
            <a href="#" class="btn btn-primary btn-outline">Nos tarifs</a>
        </div>

        <picture class="picture shadow-lg">
            <?php 
            $thumbnail_id = get_field('hero_thumbnail');
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
            ?>
            <source srcset="<?= wp_get_attachment_image_srcset($thumbnail_id) ?>" />
            <img src="<?= wp_get_attachment_image_url($thumbnail_id) ?>" alt="<?= $alt_text ?>" class="img" />
        </picture>
    </div>    
</section>

<section class="section section-features">
     
</section>

<?php get_footer(); ?>