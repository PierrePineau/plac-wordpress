<?php
get_header();
?>

<main id="primary" class="site-main">
  <section class="min-h-screen flex flex-col md:flex-row">
    <!-- Colonne de gauche : 404 + message -->
    <div class="w-full md:w-1/2 bg-[#001F5C] text-white p-8 flex flex-col justify-center items-start">
      <h1 class="text-6xl text-white font-bold mb-4">404</h1>
      <h2 class="text-2xl text-white font-semibold mb-4">Oups ! Page introuvable</h2>
      <p class="mb-8 text-white">
        Il semble que la page que vous recherchez n’existe pas.
      </p>
      <div class="flex flex-col gap-4">
        <a href="<?php echo esc_url( home_url('/') ); ?>" 
           class="btn btn-outline">
          Retour à l'accueil
        </a>
      </div>
    </div>

    <!-- Colonne de droite : Contact -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center items-start">
      <h3 class="text-2xl font-bold mb-4">Prendre contact</h3>
      <p class="mb-4">Notre équipe est là pour vous répondre.</p>
      <div class="mb-6">
        <ul class="mb-4">
          <li class="font-semibold mb-1">Par email</li>
          <li class="text-neutral-600">contact@plac.fr</li>
        </ul>
        <ul class="mb-4">
          <li class="font-semibold mb-1">Par téléphone</li>
          <li class="text-neutral-600">+33 07 64 24 54 87</li>
        </ul>
      </div>
      <!-- Optionnel : Bouton vers une page de contact -->
      <a href="<?php echo esc_url( home_url('/contact') ); ?>"
         class="btn btn-primary">
        Page de contact
      </a>
    </div>
  </section>
</main>

<?php
get_footer();
