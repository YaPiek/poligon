<?php
/**
 * Sekcja: Proces – tło wideo i dynamiczne karty
 *
 * Tło wideo i element #uiElement obsługiwane są w pliku JS process.js.
 * Podmień ścieżkę do pliku MP4 na własną, umieszczając wideo
 * w katalogu motywu (np. /video/2.mp4) lub korzystając z CDN.
 */
?>
<section id="process-section">
  <div class="process-bg-video">
    <video autoplay muted loop playsinline>
      <source src="<?php echo esc_url( get_template_directory_uri() . '/video/2.mp4' ); ?>" type="video/mp4" />
    </video>
    <div class="process-bg-overlay"></div>
  </div>
  <!-- dodane płótno, aby process.js zainicjował karty -->
  <canvas id="canvas" style="display:none"></canvas>
  <div class="process-cards-viewport">
    <div id="uiElement"></div>
  </div>
</section>
