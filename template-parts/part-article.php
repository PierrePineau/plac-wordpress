<section class="section section-article">
    <div class="container">

        <div class="flex flex-col lg:grid lg:grid-cols-6 flex-wrap gap-4 items-center">
            <div class="flex flex-col gap-4 w-full lg:col-span-4">
                <p class="subtitle uppercase"><?php the_field('blog_subtitle'); ?></p>
                <?php the_field('blog_title'); ?>
                <p class="text-light-400 max-w-screen-md"><?php the_field('blog_description'); ?></p>    
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
                <ul class="grid lg:grid-cols-3 gap-4 w-full lg:col-span-6 lg:order-1 max-w-md lg:max-w-none">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="">
                            <article class="article__article">
                                <a href="<?= the_permalink(); ?>" class="">
                                    <picture class="article__thumbnail">
                                        <?php if (get_post_thumbnail_id()) : ?>
                                            <source srcset="<?= wp_get_attachment_image_srcset(get_post_thumbnail_id()) ?>" />
                                            <img src="<?= wp_get_attachment_image_url(get_post_thumbnail_id()) ?>" alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="img" />
                                        <?php endif ?>
                                    </picture>
                                </a>
                                <div class="article__content">
                                    <p class="subtitle">
                                        <?= the_category(', '); ?>
                                    </p>
                                    <a href="<?= the_permalink(); ?>" class="flex items-center justify-between">
                                        <h3 class=""><?php the_title(); ?></h3>
                                    </a>
                                    <div class="article__description">
                                        <?= the_excerpt(); ?>
                                    </div>
                                    <time datetime="<?= get_the_date('Y-m-d'); ?>" class="article__date text-light-400">
                                        <?= get_the_date(); ?>
                                    </time>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php
                wp_reset_postdata(); // Toujours réinitialiser après une requête personnalisée
            else :
                echo '<p>Aucun article trouvé.</p>';
            endif;
            ?>
            <div class="flex justify-center lg:justify-end lg:items-end lg:col-span-2 self-end">
                <a href="<?= the_field('blog_link'); ?>" class="btn btn-primary flex-shrink-0">Tous les articles</a>
            </div>
        </div>
    </div>
</section>