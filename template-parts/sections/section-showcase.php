<?php
/**
 * Sekcja: Showcase – gama produktów
 *
 * Wyświetla trzy karty produktowe z tytułami i obrazkami. W razie
 * potrzeby zaktualizuj ścieżki obrazów. Efekty flip i animacje AOS
 * konfiguruje plik showcase.css oraz biblioteka AOS.
 */
?>
<section id="showcase-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Kompletna gama składników', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Kompletna gama składników', 'lyocycle-theme' ); ?>
  </h2>
  <div class="product-showcase">
    <div class="showcase-card" data-aos="flip-left">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/fr_and_cru.png' ); ?>" alt="<?php esc_attr_e( 'Owoce & Crunchies', 'lyocycle-theme' ); ?>">
      <div class="overlay"><span><?php esc_html_e( 'Owoce & Crunchies', 'lyocycle-theme' ); ?></span></div>
    </div>
    <div class="showcase-card" data-aos="flip-left" data-aos-delay="200">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/wa_and_sup.png' ); ?>" alt="<?php esc_attr_e( 'Warzywa & Superfoods', 'lyocycle-theme' ); ?>">
      <div class="overlay"><span><?php esc_html_e( 'Warzywa & Superfoods', 'lyocycle-theme' ); ?></span></div>
    </div>
    <div class="showcase-card" data-aos="flip-left" data-aos-delay="400">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/zi_and_przy_ser.png' ); ?>" alt="<?php esc_attr_e( 'Zioła, przyprawy & cheese', 'lyocycle-theme' ); ?>">
      <div class="overlay"><span><?php esc_html_e( 'Zioła, przyprawy & cheese', 'lyocycle-theme' ); ?></span></div>
    </div>
  </div>
</section>
