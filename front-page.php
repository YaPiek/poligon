<?php get_header(); ?>

<main>
  <?php
    /*
     * Strona główna ładuje poszczególne sekcje w ustalonej kolejności.
     * Dzięki temu motyw WordPress odzwierciedla dokładnie strukturę
     * oryginalnego projektu HTML. Każda sekcja posiada własny plik
     * template w katalogu template‑parts/sections/section‑{nazwa}.php.
     */
    get_template_part( 'template-parts/sections/section', 'video-sep' );
    get_template_part( 'template-parts/sections/section', 'info' );
    get_template_part( 'template-parts/sections/section', 'lyocycle' );
    get_template_part( 'template-parts/sections/section', 'products' );
    get_template_part( 'template-parts/sections/section', 'vision' );
    get_template_part( 'template-parts/sections/section', 'process' );
/*  get_template_part( 'template-parts/sections/section', 'showcase' ); */
    get_template_part( 'template-parts/sections/section', 'benefits' );
    get_template_part( 'template-parts/sections/section', 'startups' );
/*    get_template_part( 'template-parts/sections/section', 'case-studies' ); */
/*    get_template_part( 'template-parts/sections/section', 'certifications' ); */
/*    get_template_part( 'template-parts/sections/section', 'flavor-wheel' ); */
/*    get_template_part( 'template-parts/sections/section', 'counter' ); */
/*    get_template_part( 'template-parts/sections/section', 'mini-video' ); */
/*    get_template_part( 'template-parts/sections/section', 'lab-form' ); */
/*    get_template_part( 'template-parts/sections/section', 'timeline' ); */
  ?>
</main>

<?php get_footer(); ?>
