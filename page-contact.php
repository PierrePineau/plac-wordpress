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
            <p class="text-[#7b97b6] text-base font-medium font-['Satoshi']"><?= the_field('title_mail'); ?></p>
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
        <a href="https://www.facebook.com" target="_blank" rel="noopener">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-white">
            <path d="M22 12C22 6.477 17.523 2 12 2S2 6.477 2 12c0 5.035 3.676 9.213 8.438 9.878v-6.99h-2.54v-2.888h2.54v-2.203c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.463h-1.26c-1.243 0-1.63.77-1.63 1.562v1.872h2.773l-.443 2.888h-2.33v6.99C18.324 21.213 22 17.035 22 12z"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com" target="_blank" rel="noopener">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-white">
            <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm4.75-.75a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com" target="_blank" rel="noopener">
          <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-white">
            <path d="M20.447 20.452H17.24v-5.569c0-1.327-.025-3.036-1.85-3.036-1.85 0-2.135 1.444-2.135 2.937v5.668H10.03V9h3.092v1.561h.044c.431-.815 1.488-1.674 3.062-1.674 3.277 0 3.882 2.156 3.882 4.964v6.601zM5.337 7.433a1.79 1.79 0 1 1 0-3.579 1.79 1.79 0 0 1 0 3.579zM6.919 20.452H3.757V9h3.162v11.452zM22.225 0H1.771C.792 0 0 .771 0 1.723v20.554C0 23.229.792 24 1.771 24h20.451C23.208 24 24 23.229 24 22.277V1.723C24 .771 23.208 0 22.225 0z"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
  <section class="w-full md:w-1/2 bg-white text-black py-12 flex">
  <div class="flex flex-col gap-60 container mx-auto px-6 md:px-10">
      <div class="mt-4 md:mt-8 flex flex-col space-y-6 md:text-left gap-11">
    <div class="container mx-auto px-6 md:px-10">
      <h1 class="text-neutral-950 text-2xl font-bold font-['Satoshi']"><?= the_field('titre_formulaire'); ?></h1>
      <p class="text-neutral-400 text-base font-medium font-['Satoshi']"><?= the_field('description_formulaire'); ?> <span class="text-[#295bff] text-base font-bold font-['Satoshi']"><?= the_field('mail'); ?></span></p>
      <div id="contact-form" class="mt-4 md:mt-8">
        <?= do_shortcode('[contact-form-7 id="c33a64b" title="Formulaire de contact"]'); ?>
      </div>
    </div>
</div>
</div>
  </section>
</div>
<?php get_footer(); ?>
