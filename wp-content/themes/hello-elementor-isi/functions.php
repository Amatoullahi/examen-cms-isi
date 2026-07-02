<?php
/**
 * Theme enfant ISI SUPTECH - functions.php
 * Toutes les personnalisations vont ici.
 */

// Charger les styles parent + enfant dans le bon ordre
add_action( 'wp_enqueue_scripts', 'isi_child_enqueue_styles' );

function isi_child_enqueue_styles() {
    // Style du theme parent
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme()->parent()->get( 'Version' )
    );

    // Style du theme enfant (surcharge le parent)
    wp_enqueue_style(
        'hello-elementor-isi-style',
        get_stylesheet_uri(),
        [ 'hello-elementor-style' ],
        wp_get_theme()->get( 'Version' )
    );
}

/* ===============================================
   1. MODIFIER LE TITRE DU SITE DANS L'ADMIN
   =============================================== */
add_filter( 'admin_title', 'isi_admin_title', 10, 2 );
function isi_admin_title( $admin_title, $title ) {
    return $title . ' | ISI SUPTECH Admin';
}

/* ===============================================
   2. AJOUTER DES TYPES DE CONTENU PERSONNALISES
   (Custom Post Types) - Pour les Programmes
   =============================================== */
add_action( 'init', 'isi_register_post_types' );
function isi_register_post_types() {
    register_post_type( 'programme', [
        'labels' => [
            'name'               => 'Programmes',
            'singular_name'      => 'Programme',
            'add_new_item'       => 'Ajouter un programme',
            'edit_item'          => 'Modifier le programme',
        ],
        'public'      => true,
        'show_in_rest' => true, // active Gutenberg et WP REST API
        'supports'    => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'menu_icon'   => 'dashicons-book-alt',
        'has_archive' => true,
        'rewrite'     => [ 'slug' => 'programmes' ],
    ] );
}

/* ===============================================
   3. MODIFIER LE MESSAGE DU PIED DE PAGE ADMIN
   =============================================== */
add_filter( 'admin_footer_text', function() {
    return 'ISI SUPTECH &mdash; Administration du site';
} );

/* ===============================================
   4. RETIRER LES EMOJIS WORDPRESS (performance)
   =============================================== */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

// Charger notre script JS custom
add_action( 'wp_enqueue_scripts', 'isi_enqueue_scripts' );
function isi_enqueue_scripts() {
    wp_enqueue_script(
        'isi-main',                             // handle unique
        get_stylesheet_directory_uri() . '/js/isi-main.js',
        [ 'jquery' ],                            // dependances
        '1.0.0',                                // version (cache busting)
        true                                    // charger en bas de page
    );

    // Passer des donnees PHP vers JavaScript (wp_localize_script)
    wp_localize_script( 'isi-main', 'isiData', [
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'isi-nonce' ),
        'siteurl' => get_site_url(),
    ] );
}

/* ===== RETIRER LES RESSOURCES INUTILES ===== */

// Supprimer les styles Gutenberg (on n'utilise pas le bloc editor)
add_action( 'wp_enqueue_scripts', 'isi_remove_gutenberg_styles', 100 );
function isi_remove_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}

// Desactiver l'auto-chargement des scripts jQuery UI inutiles
add_action( 'wp_enqueue_scripts', 'isi_dequeue_unused', 100 );
function isi_dequeue_unused() {
    wp_dequeue_script( 'jquery-migrate' );
}

/* ===== LAZY LOADING NATIF POUR LES IMAGES ===== */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

/* ===== PRECONNECT AUX POLICES GOOGLE ===== */
add_action( 'wp_head', 'isi_preconnect_fonts', 1 );
function isi_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

/* Masquer la version WordPress (presente dans meta generator et les assets) */
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

/* Supprimer le numero de version des assets CSS/JS */
add_filter( 'style_loader_src', 'isi_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'isi_remove_ver_css_js', 9999 );
function isi_remove_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}

/* Desactiver l'API XML-RPC (vecteur d'attaque bruteforce) */
add_filter( 'xmlrpc_enabled', '__return_false' );

/* Desactiver l'enumeration des auteurs (?author=1) */
add_action( 'template_redirect', 'isi_disable_author_enum' );
function isi_disable_author_enum() {
    if ( isset( $_GET['author'] ) ) {
        wp_redirect( home_url(), 301 );
        exit();
    }
}

/* Injecter Tailwind et les styles de la maquette dans le head */
add_action( 'wp_head', 'isi_inject_mockup_assets', 100 );
function isi_inject_mockup_assets() {
    ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#1f4085',
              'primary-dark': '#162e5f',
              'primary-mid': '#3a589e',
              'primary-light': '#dae2ff',
              gold: '#ffba2d',
              'gold-light': '#fff3d0',
              surface: '#f7f9fb',
              'surface-low': '#f2f4f6',
              'surface-container': '#eceef0',
            },
            fontFamily: {
              display: ['"Public Sans"', 'sans-serif'],
              body: ['Inter', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <style>
      * { box-sizing: border-box; }
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        vertical-align: middle;
        display: inline-block;
      }
      .star-fill { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }

      /* Animated gradient text */
      .text-gradient {
        background: linear-gradient(135deg, #fff 0%, #b1c5ff 60%, #ffba2d 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      /* Nav link hover underline */
      .nav-link { position: relative; }
      .nav-link::after {
        content: '';
        position: absolute;
        bottom: -2px; left: 0;
        width: 0; height: 2px;
        background: #1f4085;
        transition: width 0.25s ease;
      }
      .nav-link:hover::after, .nav-link.active::after { width: 100%; }

      /* Card hover lift */
      .card-lift {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
      }
      .card-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 24px 64px rgba(31, 64, 133, 0.12);
      }

      /* Image zoom in card */
      .img-zoom-wrap { overflow: hidden; }
      .img-zoom-wrap img { transition: transform 0.55s ease; }
      .card-lift:hover .img-zoom-wrap img { transform: scale(1.07); }

      /* Glassmorphism */
      .glass {
        background: rgba(255,255,255,0.88);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
      }

      /* Dot grid pattern */
      .dot-grid {
        background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0);
        background-size: 32px 32px;
      }

      /* Scroll indicator bounce */
      @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(6px); }
      }
      .bounce-slow { animation: bounce-slow 1.8s ease-in-out infinite; }

      /* Fade-in-up animation */
      @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
      }
      .anim-1 { opacity:0; animation: fadeInUp 0.7s 0.15s ease forwards; }
      .anim-2 { opacity:0; animation: fadeInUp 0.7s 0.30s ease forwards; }
      .anim-3 { opacity:0; animation: fadeInUp 0.7s 0.45s ease forwards; }
      .anim-4 { opacity:0; animation: fadeInUp 0.7s 0.60s ease forwards; }
      .anim-5 { opacity:0; animation: fadeInUp 0.7s 0.80s ease forwards; }

      /* Progress bar */
      .progress-bar { height: 4px; border-radius: 2px; }

      /* Pill badge */
      .badge {
        display: inline-flex; align-items: center; gap: 4px;
        padding: 3px 11px;
        border-radius: 9999px;
        font-size: 11px; font-weight: 700;
        letter-spacing: 0.06em; text-transform: uppercase;
      }

      section { scroll-margin-top: 80px; }

      /* Custom scrollbar */
      ::-webkit-scrollbar { width: 5px; }
      ::-webkit-scrollbar-track { background: #f1f1f1; }
      ::-webkit-scrollbar-thumb { background: #3a589e; border-radius: 3px; }
    </style>
    <?php
}