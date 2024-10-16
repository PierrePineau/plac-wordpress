<section class="section section-faq">
    <div class="container items-center lg:!flex-row lg:justify-between lg:items-start">
        <div class="flex flex-col gap-4 justify-start items-start w-full lg:w-1/3">
            <p class="subtitle uppercase"><?php the_field('faq_subtitle'); ?></p>
            <?php the_field('faq_title'); ?>
            <p class="text-light-400 max-w-screen-md"><?php the_field('faq_description'); ?></p>     
            <a href="<?= the_field('faq_link'); ?>" class="btn btn-primary">Nous contacter</a>
        </div>
               
        <?php
        $args = array(
            'post_type' => 'question', // Utilisez le slug de votre nouveau type de publication
            'posts_per_page' => 10, // Nombre d'articles à afficher
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <ul class="faq__list lg:w-2/3 lg:pl-8 xl:pl-20 flex flex-col justify-end" x-data="{ openQuestion: null }">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="faq__item border-b-light-100 border-b-2">
                        <button @click="openQuestion === <?php the_ID(); ?> ? openQuestion = null : openQuestion = <?php the_ID(); ?>" class="faq__head py-4">
                            <h3><?php the_title(); ?></h3>
                        </button>
                        <div x-show="openQuestion === <?php the_ID(); ?>" class="faq__content pb-4" x-transition.origin.top.left x-collapse>
                            <?php the_field('question_reponse'); ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php
            wp_reset_postdata(); // Toujours réinitialiser après une requête personnalisée
        endif;
        ?>
    </div>
</section>