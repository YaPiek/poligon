<?php
/**
 * Sekcja: Video Separator
 */
?>
<section id="video-sep-section" class="video-sep-section">
  <div class="video-wrapper">
    <video
      id="background-video"
      autoplay
      muted
      loop
      playsinline
      src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/my-video.mp4' ); ?>"
    >
      <!--
      Możesz zamiast src użyć:
      <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/my-video.mp4' ); ?>" type="video/mp4">
      -->
    </video>
  </div>

  <div class="depth-1"></div>
  <div class="depth-2"></div>
</section>
