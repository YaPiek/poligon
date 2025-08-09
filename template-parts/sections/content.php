<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumb">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>
  <?php endif; ?>

  <header class="entry-header">
    <?php if ( is_singular() ) : ?>
      <h1><?php the_title(); ?></h1>
    <?php else : ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
  </header>

  <div class="entry-summary">
    <?php
      if ( is_singular() ) {
        the_content();
        wp_link_pages();
      } else {
        the_excerpt();
      }
    ?>
  </div>

  <?php if ( is_singular() ) : ?>
    <footer class="entry-footer">
      <?php the_tags(); ?>
    </footer>
  <?php endif; ?>
</article>
