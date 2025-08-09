<?php
/**
 * Sekcja: Case studies / zaufane marki
 *
 * W tej sekcji możesz zaprezentować logotypy zadowolonych klientów
 * oraz krótki cytat/testimonial. Upewnij się, że pliki graficzne
 * znajdują się w katalogu motywu (np. /img) lub zastąp je własnymi
 * zdjęciami. Pamiętaj o zachowaniu proporcji obrazów.
 */
?>
<section id="case-studies-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Zaufały nam marki', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Zaufały nam marki', 'lyocycle-theme' ); ?>
  </h2>
  <div class="logos-wall">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/brand1.png' ); ?>" alt="<?php esc_attr_e( 'Marka 1', 'lyocycle-theme' ); ?>">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/brand2.png' ); ?>" alt="<?php esc_attr_e( 'Marka 2', 'lyocycle-theme' ); ?>">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/brand3.png' ); ?>" alt="<?php esc_attr_e( 'Marka 3', 'lyocycle-theme' ); ?>">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/brand4.png' ); ?>" alt="<?php esc_attr_e( 'Marka 4', 'lyocycle-theme' ); ?>">
  </div>
  <blockquote class="testimonial" data-aos="fade-up">
    <?php echo wp_kses_post( '„Dzięki liofilizowanym składnikom Lyocycle stworzyliśmy pierwsze na świecie chrupki proteinowe bez dodatku cukru – hit sprzedażowy w 2024!”' ); ?>
    <cite>– CEO, NutriCrunch Sp. z o.o.</cite>
  </blockquote>
</section>
