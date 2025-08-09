<?php
/**
 * Sekcja: Licznik – uratowana żywność
 *
 * Prosty licznik prezentujący liczbę kilogramów uratowanej żywności.
 * Wartość animowana jest za pomocą skryptu counter.js. Możesz
 * modyfikować atrybut data-count w JavaScript, jeśli dane mają
 * pochodzić z API lub panelu administracyjnego.
 */
?>
<section id="counter-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Zero Food Waste', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Zero Food Waste', 'lyocycle-theme' ); ?>
  </h2>
  <p class="counter-desc"><?php esc_html_e( 'Do tej pory uratowaliśmy', 'lyocycle-theme' ); ?></p>
  <span id="savedCounter" class="big-number">0</span>
  <p class="counter-desc"><?php esc_html_e( 'kg żywności przed zmarnowaniem.', 'lyocycle-theme' ); ?></p>
</section>
