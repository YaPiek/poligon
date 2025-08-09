<?php get_header(); ?>

<main class="site-main single-post">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h1><?php the_title(); ?></h1>
        <div class="entry-meta">
          <?php echo get_the_date(); ?> • <?php the_author(); ?>
        </div>
      </header>
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumb"><?php the_post_thumbnail('full'); ?></div>
      <?php endif; ?>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
      </div>
      <footer class="entry-footer">
        <?php the_tags(); ?>
      </footer>
    </article>

    <?php
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
    ?>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
