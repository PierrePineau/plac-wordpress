<section class="section section-article">
    <div class="container">
        <div class="flex flex-col gap-4 items-center">
            <div class="flex flex-col gap-4 w-full md:flex-wrap">
                <div class="flex flex-col gap-4">
                    <p class="subtitle uppercase"><?php the_field('blog_subtitle'); ?></p>
                    <?php the_field('blog_title'); ?>
                </div>
                
                <p class="text-light-400"><?php the_field('blog_description'); ?></p>    
            </div>

            <?php
            // SI c'est la page home ou une page de catégorie je voudrais afficher les 9 derniers articles
            // Si c'est un post ou si c'est une page de type article je voudrais afficher les 3 derniers articles
            // Si c'est la page home ou une page de catégorie je voudrais afficher les categories disponibles
            if (is_home() || is_category()) {
                // Afficher les catégories
                $categories = get_categories();
                if (!empty($categories)) {
                    echo '<ul class="categories-list">';
                    foreach ($categories as $category) {
                        echo '<li class="category-item">';
                        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if (is_category()) {
                $args = array(
                    'post_type'      => 'post',    // Type de contenu : articles
                    'posts_per_page' => 9,         // Nombre d'articles à afficher
                    'orderby'        => 'date',    // Trier par date
                    'order'          => 'DESC',    // Du plus récent au plus ancien
                    'paged'          => $paged,    // Pagination
                );
            }  else if (
                is_home()
            ) {
                $args = array(
                    'post_type'      => 'post',    // Type de contenu : articles
                    'posts_per_page' => 9,         // Nombre d'articles à afficher
                    'orderby'        => 'date',    // Trier par date
                    'order'          => 'DESC',    // Du plus récent au plus ancien
                    'paged'          => $paged,    // Pagination
                );
            }

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
        </div>
    </div>
</section>