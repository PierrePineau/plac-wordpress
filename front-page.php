<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

<section class="section section-hero">
    <div class="container items-center">
        <div class="flex flex-col justify-center gap-8 py-4 md:py-8">
            <p class="subtitle"><?php the_field('hero_subtitle'); ?></p>
            <?php the_field('hero_title'); ?>
            <p class="text-center text-light-400 max-w-screen-md"><?php the_field('hero_description'); ?></p>

            <div class="flex gap-4 justify-center mx-auto">
                <a href="https://app.gestion-plac.fr/" class="btn btn-primary"><i data-lucide="rocket"></i>Essayer gratuitement</a>
                <a href="#" class="btn btn-light btn-outline"><i data-lucide="screen-share"></i>Nos tarifs</a>
            </div>  
        </div>
        <picture class="picture">
            <?php 
            $thumbnail_id = get_field('hero_thumbnail');
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
            ?>
            <source srcset="<?= wp_get_attachment_image_srcset($thumbnail_id) ?>" />
            <img src="<?= wp_get_attachment_image_url($thumbnail_id) ?>" alt="<?= $alt_text ?>" class="img" />
        </picture>
    </div>    
</section>

<?php get_template_part('template-parts/part', 'fonctionnalite'); ?>
<?php get_template_part('template-parts/part', 'article'); ?>
<?php get_template_part('template-parts/part', 'question'); ?>
<?php 
// get_template_part('template-parts/part', 'form');
?>

<?php get_footer(); ?>