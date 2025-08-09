<?php
/**
 * Sekcja: Mini wideo
 *
 * Prezentuje miniaturę wideo, po kliknięciu otwiera modal z filmem.
 * Adresy plików wideo i obrazków są przykładami – umieść własne
 * zasoby w katalogu motywu lub podaj zewnętrzne URL.
 */
?>
<section id="mini-video-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Zobacz jak to robimy', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Zobacz jak to robimy', 'lyocycle-theme' ); ?>
  </h2>
  <div class="video-thumb" data-modal="modalVideo">
    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=800&q=60" alt="<?php esc_attr_e( 'Odtwórz wideo', 'lyocycle-theme' ); ?>">
    <i class="fas fa-play-circle"></i>
  </div>
  <div id="modalVideo" class="modal">
    <span class="modal-close">&times;</span>
    <video controls src="<?php echo esc_url( get_template_directory_uri() . '/video/lyo_process.mp4' ); ?>" poster="<?php echo esc_url( get_template_directory_uri() . '/img/video_poster.jpg' ); ?>"></video>
  </div>
</section>
