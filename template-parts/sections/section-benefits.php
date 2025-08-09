<?php
/**
 * Sekcja: Korzyści / ikony cech
 *
 * Ten plik generuje listę ikon i krótkich opisów przedstawiających
 * zalety produktów LyoCycle. Struktura pochodzi wprost z projektu
 * HTML i została lekko zmodyfikowana na potrzeby WordPressa: używamy
 * funkcji tłumaczeń i wp_kses_post tam, gdzie występują znaczniki
 * HTML wewnątrz tekstu.
 */
?>
<section id="benefits-section" class="features-icons">
  <div class="container">
    <div class="features-categories">
      <span class="features-category"><?php esc_html_e( 'Praktyczne', 'lyocycle-theme' ); ?></span>
      <span class="features-category"><?php esc_html_e( 'Pożywne', 'lyocycle-theme' ); ?></span>
      <span class="features-category"><?php esc_html_e( 'Przepyszne', 'lyocycle-theme' ); ?></span>
    </div>
    <div class="features-list">
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-regular fa-calendar-check"></i></span>
        <span class="feature-text"><?php echo wp_kses_post( 'Długi termin<br>przydatności do spożycia' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-feather"></i></span>
        <span class="feature-text"><?php esc_html_e( 'Ultraniska waga', 'lyocycle-theme' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-regular fa-clock"></i></span>
        <span class="feature-text"><?php echo wp_kses_post( 'Szybkie w<br>przygotowaniu' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-apple-whole"></i></span>
        <span class="feature-text"><?php esc_html_e( 'Prosty skład', 'lyocycle-theme' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-ban"></i></span>
        <span class="feature-text"><?php echo wp_kses_post( 'Bez sztucznych<br>dodatków' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-droplet"></i></span>
        <span class="feature-text"><?php esc_html_e( 'Bez oleju palmowego', 'lyocycle-theme' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-bowl-food"></i></span>
        <span class="feature-text"><?php echo wp_kses_post( 'Gotowane przed<br>liofilizacją' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-regular fa-snowflake"></i></span>
        <span class="feature-text"><?php echo wp_kses_post( 'Wyłącznie<br>liofilizowane' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-map"></i></span>
        <span class="feature-text"><?php esc_html_e( 'Polski producent', 'lyocycle-theme' ); ?></span>
      </div>
      <div class="feature-item">
        <span class="feature-icon"><i class="fa-solid fa-lemon"></i></span>
        <span class="feature-text"><?php esc_html_e( 'Naturalny smak', 'lyocycle-theme' ); ?></span>
      </div>
    </div>
  </div>
</section>
