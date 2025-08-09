<?php
/**
 * Sekcja: Formularz zamówienia próbki z laboratorium
 *
 * Umożliwia użytkownikom wysłanie zapytania o próbkę produktu. To
 * prosty formularz HTML, który można rozszerzyć o obsługę zapisu
 * zgłoszeń w bazie danych lub integrację z WooCommerce. Skrypt
 * lab_form.js zapewnia walidację i obsługę wysyłki.
 */
?>
<section id="lab-form-section">
  <h2 class="section-title glitch" data-text="<?php esc_attr_e( 'Zamów próbkę', 'lyocycle-theme' ); ?>">
    <?php esc_html_e( 'Zamów próbkę', 'lyocycle-theme' ); ?>
  </h2>
  <form id="sampleForm">
    <input type="email" name="email" placeholder="<?php esc_attr_e( 'Twój e‑mail', 'lyocycle-theme' ); ?>" required>
    <select name="category" required>
      <option value=""><?php esc_html_e( 'Wybierz kategorię', 'lyocycle-theme' ); ?></option>
      <option><?php esc_html_e( 'Owoce', 'lyocycle-theme' ); ?></option>
      <option><?php esc_html_e( 'Zioła', 'lyocycle-theme' ); ?></option>
      <option><?php esc_html_e( 'Warzywa', 'lyocycle-theme' ); ?></option>
    </select>
    <textarea name="message" placeholder="<?php esc_attr_e( 'Opisz swój projekt (max 300 znaków)', 'lyocycle-theme' ); ?>" maxlength="300"></textarea>
    <button type="submit" class="hero-btn"><?php esc_html_e( 'Wyślij', 'lyocycle-theme' ); ?></button>
  </form>
</section>
