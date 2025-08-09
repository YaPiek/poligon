<?php get_header(); ?>

<main class="site-main archive-page">
  <header class="archive-header">
    <h1>
      <?php
        if ( is_category() ) {
          single_cat_title();
        } elseif ( is_tag() ) {
          single_tag_title();
        } elseif ( is_post_type_archive() ) {
          post_type_archive_title();
        } else {
          esc_html_e( 'Archiwum', 'lyocycle-theme' );
        }
      ?>
    </h1>
  </header>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
    <?php endwhile; ?>

    <nav class="pagination">
      <?php the_posts_pagination(); ?>
    </nav>
  <?php else : ?>
    <p><?php esc_html_e( 'Brak treści do wyświetlenia.', 'lyocycle-theme' ); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
