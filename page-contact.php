<?php
/* Template Name: Page Contact Deux Sections Distinctes */
get_header();
?>
<div class="flex flex-col md:flex-row min-h-screen">
  <section class="w-full md:w-1/2 bg-primary-800 text-white py-12 flex items-center">
    <div class="container mx-auto px-6 md:px-10">
      <div class="mt-4 md:mt-8 flex flex-col space-y-6 text-center md:text-left">
        <div class="flex flex-col items-center md:items-start gap-3">
          <h1 class="text-xl md:text-2xl font-bold"><?= the_field('title'); ?></h1>
          <p class="text-sm max-w-lg"><?= the_field('description'); ?></p>
        </div>
        <div class="text-center md:text-left">
          <h3 class="text-lg md:text-xl font-semibold">Par téléphone</h3>
          <p><?= the_field('title_hourly'); ?></p>
          <a class="underline block mt-1" href="tel:+330767676767"><?= the_field('telephone'); ?></a>
        </div>
      </div>
      <div class="mt-8 flex justify-center md:justify-start space-x-6">
        <a href="#"><img src="#" alt="Facebook" class="w-6 h-6"></a>
        <a href="#"><img src="#" alt="Instagram" class="w-6 h-6"></a>
        <a href="#"><img src="#" alt="LinkedIn" class="w-6 h-6"></a>
      </div>
    </div>
  </section>
  <section class="w-full md:w-1/2 bg-white text-black py-12 flex items-center">
    <div class="container mx-auto px-6 md:px-10">
      <div id="contact-form" class="mt-4 md:mt-8">
        <?= do_shortcode('[contact-form-7 id="c33a64b" title="Formulaire de contact"]'); ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
