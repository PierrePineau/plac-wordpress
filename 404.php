<?php
get_header();
?>

<main id="primary" class="site-main">
  <section class="flex flex-col md:flex-row min-h-[80vh]">
    <div class="w-full md:w-1/3 bg-[#001F5C] text-white p-8 flex flex-col justify-center">
      <h2 class="text-2xl font-bold mb-4">Restons en contact</h2>
      <p class="mb-4">Notre équipe est là pour vous répondre.</p>
      <ul class="mb-4">
        <li class="font-semibold">Par email</li>
        <li class="text-neutral-200">contact@plac.fr</li>
      </ul>
      <ul>
        <li class="font-semibold">Par téléphone</li>
        <li class="text-neutral-200">+33 07 64 24 54 87</li>
      </ul>
    </div>
    <div class="w-full md:w-2/3 p-8 flex flex-col justify-center">
      <h1 class="text-3xl font-bold mb-4">404 - Page introuvable</h1>
      <p class="mb-4">La page que vous recherchez n'existe pas ou a été déplacée. Vous pouvez retourner à l'accueil ou remplir le formulaire ci-dessous pour nous contacter.</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-blue-600 text-white px-4 py-2 rounded mb-6">Retour à l'accueil</a>
    </div>
  </section>
</main>

<?php
get_footer();
