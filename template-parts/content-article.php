<section class="section section-article">
  <div class="container">
    <div class="flex flex-col gap-4 items-center">
      <div class="flex flex-col gap-4 w-full md:flex-wrap">
        <div class="flex flex-col gap-4">
          <p class="subtitle uppercase"><?php the_field('blog_subtitle'); ?></p>
          <h1><?php the_field('blog_title'); ?></h1>
        </div>
        <p class="text-light-400"><?php the_field('blog_description'); ?></p>
      </div>
      <?php if ( is_home() || is_category() ) : ?>
      <div class="flex items-start justify-start">
        <ul class="flex list-none m-0 p-0 border-b border-[#a3a3a3]">
          <?php 
            $is_all_active = !is_category();
            $active_classes_all = $is_all_active ? ' text-[#0a0a0a] border-b-[#0a0a0a] font-bold' : ' hover:text-[#0a0a0a] hover:border-b-[#0a0a0a]';
            $all_posts_link = esc_url( home_url( '/blog' ) );
          ?>
          <li class="inline-block">
            <a class="inline-block py-2 px-3 text-[#a3a3a3] no-underline border-b-2 border-transparent transition-colors duration-200 ease-in-out<?php echo $active_classes_all; ?>" href="<?php echo $all_posts_link; ?>">Tout voir</a>
          </li>
          <?php 
            $categories = get_categories();
            if ( !empty( $categories ) ) :
              $current_category_id = 0;
              if ( is_category() ) :
                $current_category = get_queried_object();
                if ( isset( $current_category->term_id ) ) :
                  $current_category_id = $current_category->term_id;
                endif;
              endif;
              foreach ( $categories as $category ) :
                $is_active = ( is_category() && $category->term_id == $current_category_id );
                $active_classes = $is_active ? ' text-[#0a0a0a] border-b-[#0a0a0a] font-bold' : ' hover:text-[#0a0a0a] hover:border-b-[#0a0a0a]';
          ?>
          <li class="inline-block">
            <a class="inline-block py-2 px-3 text-[#a3a3a3] no-underline border-b-2 border-transparent transition-colors duration-200 ease-in-out<?php echo $active_classes; ?>" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
              <?php echo esc_html( $category->name ); ?>
            </a>
          </li>
          <?php endforeach; endif; ?>
        </ul>
      </div>
      <?php endif; ?>

      <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
        if ( is_category() ) :
          $current_category = get_queried_object();
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
            'cat'            => $current_category->term_id
          );
        elseif ( is_home() ) :
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged
          );
        else :
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged
          );
        endif;
        $query = new WP_Query($args);
        if ( $query->have_posts() ) :
      ?>
      <ul class="grid lg:grid-cols-3 gap-4 w-full lg:col-span-6 max-w-md lg:max-w-none">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li>
          <article class="article__article">
            <a href="<?php the_permalink(); ?>">
              <picture class="article__thumbnail">
                <?php if ( get_post_thumbnail_id() ) : ?>
                <source srcset="<?php echo wp_get_attachment_image_srcset( get_post_thumbnail_id() ); ?>" />
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id() ); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="img" />
                <?php endif; ?>
              </picture>
            </a>
            <div class="article__content">
              <p class="subtitle"><?php the_category(', '); ?></p>
              <a href="<?php the_permalink(); ?>" class="flex items-center justify-between">
                <h3><?php the_title(); ?></h3>
              </a>
              <div class="article__description"><?php the_excerpt(); ?></div>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="article__date text-light-400">
                <?php echo get_the_date(); ?>
              </time>
            </div>
          </article>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="pagination flex flex-row justify-center mt-8 lg:order-2">
        <?php 
          if ( $query->max_num_pages > 1 ) :
            $big = 999999999;
            echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?page=%#%',
              'current' => max( 1, $paged ),
              'total' => $query->max_num_pages,
              'prev_text' => '<span class="px-4 py-2 mx-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200">« Précédent</span>',
              'next_text' => '<span class="px-4 py-2 mx-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200">Suivant »</span>',
              'before_page_number' => '<span class="px-4 py-2 mx-1 bg-gray-100 text-gray-700 rounded hover:bg-gray-200">',
              'after_page_number' => '</span>'
            ) );
          endif;
        ?>
      </div>
      <?php 
        wp_reset_postdata();
        else :
          echo '<p>Aucun article trouvé.</p>';
        endif;
      ?>
    </div>
  </div>
</section>
