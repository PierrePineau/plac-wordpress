<?php
get_header();
?>
<div class="flex flex-col md:flex-row min-h-screen">
  <section class="w-full md:w-1/2 bg-primary-800 py-12 flex">
    <div class="flex flex-col gap-60 container mx-auto px-6 md:px-10">
      <div class="mt-4 md:mt-8 flex flex-col space-y-6 md:text-left gap-11">
        <div class="flex flex-col items-start gap-3">
          <h1 class="text-white text-[40px] font-bold font-['Satoshi']"><?= the_field('title'); ?></h1>
          <p class="text-[#7b97b6] text-base font-medium font-['Satoshi']"><?= the_field('description'); ?></p>
        </div>
        <div class="flex flex-col gap-8">
          <div class="text-left">
            <h3 class="text-white text-xl font-bold font-['Satoshi'] pb-4">Par email</h3>
            <p class="text-[#7b97b6] text-base font-medium font-['Satoshi']" ><?= the_field('title_mail'); ?></p>
            <a class="text-white text-base font-bold font-['Satoshi']"><?= the_field('mail'); ?></a>
          </div>
          <div class="text-left">
            <h3 class="text-white text-xl font-bold font-['Satoshi'] pb-4">Par téléphone</h3>
            <p class="text-[#7b97b6] text-base font-medium font-['Satoshi']"><?= the_field('title_hourly'); ?></p>
            <a class="text-white text-base font-bold font-['Satoshi']" href="tel:+330767676767"><?= the_field('telephone'); ?></a>
          </div>
        </div>
      </div>
      <div class="mt-8 flex justify-center md:justify-start space-x-6">
        <a href="#"><img src="#" alt="Facebook" class="w-6 h-6"></a>
        <a href="#"><img src="#" alt="Instagram" class="w-6 h-6"></a>
        <a href="#"><img src="#" alt="LinkedIn" class="w-6 h-6"></a>
      </div>
    </div>
  </section>
  <section class="w-full md:w-1/2 bg-white text-black py-12 flex">
    <div class="container mx-auto px-6 md:px-10">
      <h1 class="text-neutral-950 text-2xl font-bold font-['Satoshi']"><?= the_field('titre_formulaire'); ?></h1>
      <p class="text-neutral-400 text-base font-medium font-['Satoshi']"><?= the_field('description_formulaire'); ?> <span class="text-[#295bff] text-base font-bold font-['Satoshi']"><?= the_field('mail'); ?></span></p>
      <div id="contact-form" class="mt-4 md:mt-8">
        <?= do_shortcode('[contact-form-7 id="c33a64b" title="Formulaire de contact"]'); ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
