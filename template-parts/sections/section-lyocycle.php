<?php
/**
 * Sekcja: LyoCycle – opis platformy
 *
 * Przedstawia wizję i misję marki LyoCycle wraz ze statystykami i listą
 * korzyści. Sekcja zawiera przycisk CTA zachęcający użytkowników do
 * dołączenia. Animacje, takie jak zliczanie statystyk, realizowane
 * są w pliku lyocycle.js.
 */
?>
<section id="lyocycle-section" class="lyocycle-section">
  <div class="lyo-wrapper">
    <div class="lyo-left">
      <span style="font-size: 20px;">🌱</span><h2 class="lyo-title"><?php esc_html_e( 'LyoCycle', 'lyocycle-theme' ); ?></h2>
      <p class="lyo-sub"><?php esc_html_e( 'Rewolucja w gospodarowaniu żywnością', 'lyocycle-theme' ); ?></p>
      <p class="lyo-desc"><?php esc_html_e( 'LyoCycle to innowacyjna platforma łącząca restauracje, sklepy spożywcze i lokalne społeczności w celu redukcji marnowania żywności. Dzięki naszej technologii liofilizacji, nadwyżki żywności zyskują drugie życie jako pełnowartościowe produkty z długim terminem przydatności.', 'lyocycle-theme' ); ?></p>
      <div class="lyo-stats">
        <div class="lyo-stat-item">
          <div class="lyo-stat-number" data-count="12000">0</div>
          <div class="lyo-stat-label"><?php esc_html_e( 'kg uratowanej żywności', 'lyocycle-theme' ); ?></div>
        </div>
        <div class="lyo-stat-item">
          <div class="lyo-stat-number" data-count="85">0</div>
          <div class="lyo-stat-label"><?php esc_html_e( 'partnerów biznesowych', 'lyocycle-theme' ); ?></div>
        </div>
        <div class="lyo-stat-item">
          <div class="lyo-stat-number" data-count="36">0</div>
          <div class="lyo-stat-label"><?php esc_html_e( 'lokalnych społeczności', 'lyocycle-theme' ); ?></div>
        </div>
      </div>
      <button class="lyo-cta"><?php esc_html_e( 'Dołącz do nas', 'lyocycle-theme' ); ?></button>
    </div>
    <div class="lyo-right">
      <ul class="lyo-list">
        <li><span>♻️</span> <?php esc_html_e( 'Redukcja marnotrawstwa o 70% w partnerujących placówkach', 'lyocycle-theme' ); ?></li>
        <li><span>🌍</span> <?php esc_html_e( 'Zrównoważony rozwój poprzez technologię liofilizacji', 'lyocycle-theme' ); ?></li>
        <li><span>🚀</span> <?php esc_html_e( 'Innowacyjne rozwiązania IoT do monitorowania świeżości', 'lyocycle-theme' ); ?></li>
        <li><span>🤝</span> <?php esc_html_e( 'Partnerstwo z lokalnymi bankami żywności', 'lyocycle-theme' ); ?></li>
        <li><span>📊</span> <?php esc_html_e( 'System analityczny śledzący oszczędności i wpływ ekologiczny', 'lyocycle-theme' ); ?></li>
        <li><span>🍎</span> <?php esc_html_e( 'Edukacja żywieniowa w szkołach i przedsiębiorstwach', 'lyocycle-theme' ); ?></li>
      </ul>
      <div class="lyo-process">
        <div class="lyo-process-item">
          <div class="lyo-process-icon">1</div>
          <div class="lyo-process-text"><?php esc_html_e( 'Zbiórka nadwyżek', 'lyocycle-theme' ); ?></div>
        </div>
        <div class="lyo-process-item">
          <div class="lyo-process-icon">2</div>
          <div class="lyo-process-text"><?php esc_html_e( 'Liofilizacja', 'lyocycle-theme' ); ?></div>
        </div>
        <div class="lyo-process-item">
          <div class="lyo-process-icon">3</div>
          <div class="lyo-process-text"><?php esc_html_e( 'Redystrybucja', 'lyocycle-theme' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>
