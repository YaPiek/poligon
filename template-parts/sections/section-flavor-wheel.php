<?php
/**
 * Sekcja: Koło smaków
 *
 * Wyświetla animowane koło z segmentami smaków. Samo płótno (canvas)
 * rysowane jest w pliku JavaScript flavor_wheel.js. Treści tekstowe
 * korzystają z funkcji tłumaczeń WordPressa.
 */
?>
<section id="flavor-wheel-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Koło Smaków', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Koło Smaków', 'lyocycle-theme' ); ?>
  </h2>
  <canvas id="wheelCanvas" width="400" height="400"></canvas>
  <p id="wheelOutput" class="wheel-output"><?php esc_html_e( 'Obróć kołem, aby odkryć nowy smak!', 'lyocycle-theme' ); ?></p>
</section>
