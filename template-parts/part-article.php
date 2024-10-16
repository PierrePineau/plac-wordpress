<section class="section section-article">
    <div class="container">

        <div class="flex flex-col lg:flex-row gap-4 items-center lg:justify-between lg:items-end">
            <div class="flex flex-col gap-4 w-full">
                <p class="subtitle uppercase"><?php the_field('blog_subtitle'); ?></p>
                <?php the_field('blog_title'); ?>
                <p class="text-light-400 max-w-screen-md"><?php the_field('blog_description'); ?></p>    
            </div>

            <a href="<?= the_field('blog_link'); ?>" class="btn btn-primary flex-shrink-0">Tous les articles</a>
        </div>
        <?php
        $args = array(
            'post_type'      => 'post',    // Type de contenu : articles
            'posts_per_page' => 3,         // Nombre d'articles à afficher
            'orderby'        => 'date',    // Trier par date
            'order'          => 'DESC',    // Du plus récent au plus ancien
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <ul class="grid lg:grid-cols-3 gap-4">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="">
                        <a href="<?= the_permalink(); ?>" class="article">
                            <article class="article__article">
                                <picture class="article__thumbnail">
                                    <source srcset="<?= wp_get_attachment_image_srcset(get_post_thumbnail_id()) ?>" />
                                    <img src="<?= wp_get_attachment_image_url(get_post_thumbnail_id()) ?>" alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="img" />
                                </picture>
                                <div class="article__content">
                                    <p class="subtitle">
                                        <?= the_category(', '); ?>
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <h3 class=""><?php the_title(); ?></h3>
                                    </div>
                                    <div class="article__description">
                                        <?= the_excerpt(); ?>
                                    </div>
                                    <time datetime="<?= get_the_date('Y-m-d'); ?>" class="article__date text-light-400">
                                        <?= get_the_date(); ?>
                                    </time>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php
            wp_reset_postdata(); // Toujours réinitialiser après une requête personnalisée
        else :
            echo '<p>Aucun article trouvé.</p>';
        endif;
        ?>
    </div>
</section>