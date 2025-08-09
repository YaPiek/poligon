<section id="products-section" class="products">

    <h2 data-text="<?php echo esc_attr( $products_heading ); ?>"><?php echo esc_html( $products_heading ); ?></h2>
  <div class="cards">
    <div class="card">
      <?php $owoce_img = get_template_directory_uri() . '/assets/images/owoce.png'; ?>
      <img src="<?php echo esc_url( $owoce_img ); ?>" alt="<?php esc_attr_e( 'Owoce', 'lyocycle-theme' ); ?>">
      <div class="card-info">
        <h3><?php esc_html_e( 'Owoce', 'lyocycle-theme' ); ?></h3>
        <p><?php esc_html_e( '100 % naturalne, intensywny smak i kolor.', 'lyocycle-theme' ); ?></p>
      </div>
    </div>
    <div class="card">
      <?php $ziola_img = get_template_directory_uri() . '/assets/images/ziola.png'; ?>
      <img src="<?php echo esc_url( $ziola_img ); ?>" alt="<?php esc_attr_e( 'Zioła', 'lyocycle-theme' ); ?>">
      <div class="card-info">
        <h3><?php esc_html_e( 'Zioła', 'lyocycle-theme' ); ?></h3>
        <p><?php esc_html_e( 'Zachowane walory aromatyczne i prozdrowotne.', 'lyocycle-theme' ); ?></p>
      </div>
    </div>
    <div class="card">
      <?php $warzywa_img = get_template_directory_uri() . '/assets/images/warzywa.png'; ?>
      <img src="<?php echo esc_url( $warzywa_img ); ?>" alt="<?php esc_attr_e( 'Warzywa', 'lyocycle-theme' ); ?>">
      <div class="card-info">
        <h3><?php esc_html_e( 'Warzywa', 'lyocycle-theme' ); ?></h3>
        <p><?php esc_html_e( 'Długi termin przydatności bez straty wartości.', 'lyocycle-theme' ); ?></p>
      </div>
    </div>
  </div>
</section>
