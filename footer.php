<?php
/**
 * Szablon stopki motywu LyoCycle – wersja naprawiona
 */
?>
<footer class="site-footer">
  <div class="footer-widgets">
    <!-- Kolumna: o nas -->
    <div class="fw-col about">
      <?php
        // Ścieżka do lokalnego logotypu w katalogu motywu
        $logo_url = get_template_directory_uri() . '/assets/img/Lyocycle_logo_dark_bg.png';
      ?>
      <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php esc_attr_e( 'Logo Lyocycle', 'lyocycle-theme' ); ?>" class="footer-logo">
      <p><?php esc_html_e( 'Łączymy restauracje, sklepy i społeczności, aby zmniejszać marnowanie żywności dzięki technologii liofilizacji.', 'lyocycle-theme' ); ?></p>
      <ul class="contact-info">
        <li><i class="fas fa-map-marker-alt"></i> <?php esc_html_e( 'ul. Przemysłowa 15, Warszawa', 'lyocycle-theme' ); ?></li>
        <li><i class="fas fa-envelope"></i> <a href="mailto:biuro@lyocycle.pl">biuro@lyocycle.pl</a></li>
        <li><i class="fas fa-phone"></i> <a href="tel:+48123456789">+48 123 456 789</a></li>
      </ul>
    </div>

    <!-- Kolumna: ostatnie wpisy -->
    <div class="fw-col recent-posts">
      <h4><?php esc_html_e( 'Ostatnie wpisy', 'lyocycle-theme' ); ?></h4>
      <ul>
        <?php
          $recent = wp_get_recent_posts( [ 'numberposts' => 3 ] );
          foreach ( $recent as $post ) {
            printf(
              '<li><a href="%1$s">%2$s</a></li>',
              esc_url( get_permalink( $post['ID'] ) ),
              esc_html( wp_trim_words( $post['post_title'], 6, '…' ) )
            );
          }
        ?>
      </ul>
    </div>

    <!-- Kolumna: formularz kontaktowy -->
    <div class="fw-col contact-form">
      <h4><?php esc_html_e( 'Napisz do nas', 'lyocycle-theme' ); ?></h4>
      <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
        <?php wp_nonce_field( 'footer_contact', 'footer_contact_nonce' ); ?>
        <input type="hidden" name="action" value="footer_contact">
        <input type="text" name="name" placeholder="<?php esc_attr_e( 'Imię i nazwisko', 'lyocycle-theme' ); ?>" required>
        <input type="email" name="email" placeholder="<?php esc_attr_e( 'E-mail', 'lyocycle-theme' ); ?>" required>
        <textarea name="message" placeholder="<?php esc_attr_e( 'Wiadomość', 'lyocycle-theme' ); ?>" rows="4" required></textarea>
        <button type="submit"><?php esc_html_e( 'Wyślij', 'lyocycle-theme' ); ?></button>
      </form>
    </div>

    <!-- Kolumna: mapa -->
    <div class="fw-col map">
      <h4><?php esc_html_e( 'Gdzie nas znaleźć', 'lyocycle-theme' ); ?></h4>
      <div class="map-wrapper">
        <iframe
          src="https://www.google.com/maps?q=Przemysłowa+15,+Warszawa&output=embed"
          width="100%" height="150" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="social">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
    </div>
    <p>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> Lyocycle. <?php esc_html_e( 'Wszelkie prawa zastrzeżone.', 'lyocycle-theme' ); ?></p>
    <div class="policy-links">
      <a href="<?php echo esc_url( home_url( '/polityka-prywatności' ) ); ?>"><?php esc_html_e( 'Polityka prywatności', 'lyocycle-theme' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/regulamin' ) ); ?>"><?php esc_html_e( 'Regulamin', 'lyocycle-theme' ); ?></a>
    </div>
  </div>
</footer>

<?php
// Umożliwia wstrzykiwanie kodu przez wtyczki przed zamknięciem body
wp_footer();
?>

<button id="goUp" class="go-up" aria-label="Wróć na górę">
  <svg viewBox="0 0 24 24"><path d="M7 14l5-5 5 5" stroke="currentColor" stroke-width="2" fill="none"/></svg>
</button>
</body>
</html>
