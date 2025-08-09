<?php
/**
 * Header motywu – zawiera nav + hero!
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <!-- Czcionki i ikony -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  
  <!-- Animacje AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <?php wp_head(); ?>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body <?php body_class(); ?>>
<div class="loader"></div>
<!-- Niestandardowy kursor -->
<div class="cursor"></div>
<div class="cursor-follower"></div>

<!-- Logo niezależne od navbaru -->
<div id="logo-container" class="logo-fixed">
  <?php
    $svg_path = get_template_directory() . '/img/lyocycle_logo_v.white.svg';
    if ( file_exists( $svg_path ) ) {
      echo file_get_contents( $svg_path );
    } else {
      ?>
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/lyocycle_logo_v.white.svg' ); ?>" alt="Lyocycle Logo" class="logo-img" family="Agency FB, Arial">
      <?php
    }
  ?>
</div>

<!-- Nawigacja -->
<nav id="main-nav" class="nav-main">
  <div class="menu-toggle" id="mobile-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav-list',
      'link_before'    => '<span class="nav-link-wrapper">',
      'link_after'     => '</span>',
    ]);
  ?>
</nav>

<?php if ( is_front_page() ) : ?>
<!-- Sekcja HERO -->
<section class="hero" id="hero">
  <!-- Warstwy głębi -->
  <div class="hero-bg-1"></div>
  <div class="hero-bg-2"></div>
  <div id="particles-js"></div>

  <div class="hero-content">
    <h1>Liofilizowana Rewolucja</h1>
    <p>Największy wybór składników premium w technologii freeze-dry</p>
    <a href="https://lyocycle.pl/produkty" class="hero-btn">Zobacz więcej</a>
  </div>
</section>
<?php endif; ?>

<?php
  // Dalej idzie treść kolejnych sekcji...
  // Pamiętaj o zamknięciu wp_footer() i </body></html> w footer.php
?>
