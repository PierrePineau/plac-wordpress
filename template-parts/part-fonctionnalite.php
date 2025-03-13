<section class="section section-features">
  <div class="container items-center">
    <p class="subtitle uppercase"><?php the_field('feature_subtitle'); ?></p>
    <?php the_field('feature_title'); ?>
    <p class="text-center text-light-400 max-w-screen-md"><?php the_field('feature_description'); ?></p>
    <?php
    $args = array(
      'post_type' => 'fonctionnalites',
      'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
      <div id="slider-feature" class="splide w-full">
        <div class="splide__track">
          <ul class="splide__list features__list md:grid md:gap-8 md:grid-cols-12 !pb-8">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <li class="features__item splide__slide p-4 md:p-0">
                <a href="https://app.gestion-plac.fr" class="feature max-w-md lg:max-w-none mx-auto">
                  <article class="feature__article">
                    <picture class="feature__thumbnail">
                      <source srcset="<?= wp_get_attachment_image_srcset(get_post_thumbnail_id()) ?>" />
                      <img src="<?= wp_get_attachment_image_url(get_post_thumbnail_id()) ?>" alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="img" />
                    </picture>
                    <div class="feature__content">
                      <h3><?php the_title(); ?></h3>
                      <div class="feature__description">
                        <?= the_excerpt(); ?>
                      </div>
                      <span class="text-primary-500 inline-flex gap-2 items-center"><i data-lucide="arrow-up-right"></i> En savoir plus</span>
                    </div>
                  </article>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    <?php
      wp_reset_postdata();
    else :
      echo '<p>Aucune fonctionnalités trouvé.</p>';
    endif;
    ?>
    <div class="flex gap-4 justify-center mx-auto mt-8">
      <a href="<?= the_field('feature_button_link'); ?>" class="btn btn-primary"><i data-lucide="bring-to-front"></i><?= the_field('feature_button_text'); ?></a>
    </div>
  </div>
</section>
