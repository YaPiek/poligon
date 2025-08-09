<?php
/**
 * Sekcja: Vision – blob tło + particles.js + automatyczna pętla karuzeli
 */
?>

<section id="vision-section">
  <!-- SVG blob w tle -->
  <div class="blob-bg">
    <svg class="blob" viewBox="25 25 800 500" xmlns="http://www.w3.org/2000/svg">
      <path d="M430,150C520,80,620,90,680,170S680,340,600,400S420,450,340,390S260,290,290,190S340,210,430,150Z">
        <animate attributeName="d"
          values="
            M430,150C520,80,620,90,680,170S680,340,600,400S420,450,340,390S260,290,290,190S340,210,430,150Z;
            M400,100C500,50,600,120,700,200S650,350,550,420S350,480,280,400S220,280,250,180S300,200,400,100Z;
            M450,200C550,150,650,100,750,180S700,320,600,380S400,420,320,360S240,260,270,160S320,180,450,200Z;
            M430,150C520,80,620,90,680,170S680,340,600,400S420,450,340,390S260,290,290,190S340,210,430,150Z"
          dur="10s" repeatCount="indefinite" />
      </path>
    </svg>
  </div>

  <!-- Kontener na particles.js -->
  <div id="visionParticles" class="particles-container"></div>

  <!-- Główny wrapper: dwie kolumny -->
  <div class="vision-wrapper">
    <!-- Lewa kolumna: tekst + CTA -->
    <div class="vision-left">
      <h2 class="v-title"><?php esc_html_e( 'Nasza wizja przyszłości', 'lyocycle-theme' ); ?></h2>
      <p class="v-intro"><?php esc_html_e( 'Transformujemy nadwyżki żywności w wartościowe produkty, łącząc technologię i zrównoważony rozwój.', 'lyocycle-theme' ); ?></p>
      <button class="v-cta dream-btn" onclick="window.location.href='https://lyocycle.pl/nasze-marzenie'">
  <?php esc_html_e( 'Dowiedz się więcej', 'lyocycle-theme' ); ?>
</button>

    </div>

    <!-- Prawa kolumna: pętla karuzeli kafelków -->
    <div class="vision-right">
      <div class="scroll-track" dir="ltr">
        <?php
          $values = [
            [ 'icon' => 'fa-balance-scale', 'text' => __( 'Bezpieczeństwo żywnościowe', 'lyocycle-theme' ) ],
            [ 'icon' => 'fa-leaf',          'text' => __( '100% naturalne',               'lyocycle-theme' ) ],
            [ 'icon' => 'fa-flask',         'text' => __( 'Innowacyjna technologia',      'lyocycle-theme' ) ],
            [ 'icon' => 'fa-recycle',       'text' => __( 'Zero-waste',                  'lyocycle-theme' ) ],
            [ 'icon' => 'fa-heartbeat',     'text' => __( 'Zdrowie i odżywianie',        'lyocycle-theme' ) ],
            [ 'icon' => 'fa-rocket',        'text' => __( 'Szybka realizacja',           'lyocycle-theme' ) ],
            [ 'icon' => 'fa-award',         'text' => __( 'Nagrody jakości',             'lyocycle-theme' ) ],
            [ 'icon' => 'fa-globe',         'text' => __( 'Globalny zasięg',             'lyocycle-theme' ) ],
            [ 'icon' => 'fa-users',         'text' => __( 'Wsparcie dla start-upów',     'lyocycle-theme' ) ],
          ];
          foreach ( $values as $v ) : ?>
            <div class="value-card">
              <i class="fas <?php echo esc_attr( $v['icon'] ); ?> card-icon"></i>
              <h4><?php echo esc_html( $v['text'] ); ?></h4>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
