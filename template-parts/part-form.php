<section class="section section-form bg-primary-800 text-white">
    <div class="container items-center py-8">
        <h2 class="text-white text-center"><?= the_field('form_title'); ?></h2>
        <p class="text-center max-w-lg"><?= the_field('form_description'); ?></p>     
        
        <div id="livre-blanc">
            <?= do_shortcode('[contact-form-7 id="9fadb10" title="Livre blanc"]'); ?>
        </div>
    </div>
</section>