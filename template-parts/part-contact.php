<?php
/*
Template Name: Contact
*/
get_header();

$left_title = get_field('contact_left_title');
$left_subtitle = get_field('contact_left_subtitle');
$email_text = get_field('contact_email_text');
$phone_text = get_field('contact_phone_text');
$form_title = get_field('contact_form_title');
$form_subtitle = get_field('contact_form_subtitle');
$form_id = get_field('contact_form_id');
?>
<section class="bg-[#0B1E43] text-white">
  <div class="container mx-auto px-4 py-12 md:grid md:grid-cols-2 md:gap-8">
    <div>
      <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($left_title); ?></h2>
      <p class="mb-6"><?php echo wp_kses_post($left_subtitle); ?></p>
      <p><?php echo esc_html($email_text); ?></p>
      <p class="mt-2">Par téléphone</p>
      <p class="mt-2"><?php echo esc_html($phone_text); ?></p>
      <div class="flex space-x-4 mt-4"></div>
    </div>
    <div class="bg-white text-black p-8 rounded mt-8 md:mt-0">
      <h3 class="text-xl font-semibold mb-2"><?php echo esc_html($form_title); ?></h3>
      <p class="mb-6"><?php echo wp_kses_post($form_subtitle); ?></p>
      <?php echo do_shortcode('[contact-form-7 id="' . esc_attr($form_id) . '"]'); ?>
    </div>
  </div>
</section>
<?php
get_footer();
