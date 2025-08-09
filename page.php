<?php
// Load global header with navbar
get_header();
?>

<?php
/* -------------------------------------------------
 * 1. Optional Hero
 *    – shows only when the page has NO blocks
 *    – uses the featured image as background
 * ------------------------------------------------- */
$has_blocks = has_blocks( get_the_content() );
if ( ! $has_blocks && has_post_thumbnail() ) :
?>
<section class="page-hero" data-aos="fade-in">
  <div class="page-hero__bg"
       style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');"></div>
  <div class="page-hero__inner">
    <h1 class="page-hero__title" data-aos="zoom-out" data-aos-delay="200">
      <?php the_title(); ?>
    </h1>
  </div>
</section>
<?php endif; ?>

<!-- -------------------------------------------------
     2. Main content
        – works with Gutenberg blocks
        – falls back to simple container if no blocks
     ------------------------------------------------- -->
<main class="site-main page-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if ( $has_blocks ) : ?>
        <!-- Gutenberg – no wrappers -->
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php else : ?>
        <!-- Classic – branded card wrapper -->
        <div class="page-card" data-aos="fade-up">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="page-card__thumb" data-aos="zoom-in" data-aos-delay="300">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>

          <div class="page-card__body">
            <div class="page-card__content entry-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>