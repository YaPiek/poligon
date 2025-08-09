<?php
/**
 * Funkcje główne motywu LyoCycle
 */

// Przekazanie ścieżek do JS
wp_localize_script(
    'lyocycle-process',     
    'lyoProcessVars',       
    [
        'imgBase'     => get_template_directory_uri() . '/img',
        'placeholder' => get_template_directory_uri() . '/img/placeholder.png',
    ]
);

function lyocycle_register_menus() {
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'lyocycle-theme' ),
        'footer'  => __( 'Footer Menu',  'lyocycle-theme' ),
    ]);
}
add_action( 'after_setup_theme', 'lyocycle_register_menus' );

function lyocycle_theme_setup() {
    // Tytuł strony
    add_theme_support( 'title-tag' );
    // Obrazki wyróżniające
    add_theme_support( 'post-thumbnails' );
    // RSS
    add_theme_support( 'automatic-feed-links' );
    // HTML5
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ] );
    // Formaty wpisów (opcjonalnie)
    add_theme_support( 'post-formats', [
        'aside', 'gallery', 'quote', 'video', 'image'
    ] );
    // Tekst domeny
    load_theme_textdomain( 'lyocycle-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'lyocycle_theme_setup' );

// Rejestracja widgetów
function lyocycle_enqueue_assets() {
    $t = get_template_directory_uri();

    // Style
    $css = [
        'layout.css','navbar.css','hero.css','global.css',
        'benefits.css','case_studies.css','certifications.css',
        'counter.css','flavor_wheel.css','footer.css',
        'how-it-works.css','lab_form.css','lyocycle.css',
        'mini_video.css','process.css','products.css',
        'showcase.css','startups.css','timeline.css',
        'video_sep.css','vision.css','dream.css','info.css'
    ];
    foreach ( $css as $file ) {
        wp_enqueue_style(
            'lyo-' . str_replace('.css','',$file),
            "$t/css/$file",
            [],
            '1.0'
        );
    }

    // Zewnętrzne skrypty
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js',
        [],
        null,
        true
    );
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js',
        [ 'gsap' ],
        null,
        true
    );
    // Aos
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], null, true );

    // Skrypty motywu
    $js = [
        'cursor.js','navbar.js','smooth_scroll.js','loader.js',
        'hero_parallax.js','benefits.js','counter.js','flavor_wheel.js',
        'lab_form.js','lyocycle.js','mini_video.js','process.js',
        'products.js','timeline.js','video_sep.js',
        'vision.js','particles-uni.js', 'go-up.js', 'dream.js', 'info.js'
    ];
    foreach ( $js as $file ) {
        $handle = 'lyo-' . str_replace('.js','',$file);

        // global.js ma zależności od GSAP
        if ( $file === 'global.js' ) {
            wp_enqueue_script(
                $handle,
                "$t/js/$file",
                [ 'gsap','gsap-scrolltrigger' ],
                null,
                true
            );
        }
        // particles-init.js ma zależność od particles-js (jeśli używasz go jeszcze gdzieś)
        elseif ( $file === 'particles-init.js' ) {
            wp_enqueue_script(
                $handle,
                "$t/js/$file",
                [ 'particles-js' ],
                null,
                true
            );
        }
        // pozostałe skrypty
        else {
            wp_enqueue_script(
                $handle,
                "$t/js/$file",
                [],
                null,
                true
            );
        }
    }

    // Oznaczenie vision.js jako moduł ES6
    wp_script_add_data( 'lyo-vision', 'type', 'module' );
}
add_action( 'wp_enqueue_scripts', 'lyocycle_enqueue_assets' );


// Obsługa formularza w stopce
add_action( 'admin_post_nopriv_footer_contact', 'lyocycle_handle_footer_contact' );
add_action( 'admin_post_footer_contact',        'lyocycle_handle_footer_contact' );

function lyocycle_handle_footer_contact() {
    if ( ! isset( $_POST['footer_contact_nonce'] ) || 
         ! wp_verify_nonce( $_POST['footer_contact_nonce'], 'footer_contact' ) ) {
        wp_die( esc_html__( 'Niepoprawny token.', 'lyocycle-theme' ), 403 );
    }
    $name    = sanitize_text_field( wp_unslash( $_POST['name'] ) ?? '' );
    $email   = sanitize_email(        wp_unslash( $_POST['email'] ) ?? '' );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ) ?? '' );
    if ( ! $name || ! $email || ! $message ) {
        wp_die( esc_html__( 'Wszystkie pola wymagane.', 'lyocycle-theme' ), 400 );
    }
    $to      = get_option( 'admin_email' );
    $subject = sprintf( esc_html__( 'Kontakt od %s', 'lyocycle-theme' ), $name );
    $body    = "$message\n\n" . sprintf( __( 'Od: %1$s (%2$s)', 'lyocycle-theme' ), $name, $email );
    wp_mail( $to, $subject, $body, [ "Reply-To: $name <$email>" ] );
    wp_safe_redirect( home_url( '/?contact=success' ) );
    exit;
} 
