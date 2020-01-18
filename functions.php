<?php


include('customise.php');

add_action('after_setup_theme', 'voteforme_setup');
if (!function_exists('voteforme_setup')) :
    function voteforme_setup()
    {
        /*let wordpress handle the titles tag */
        add_theme_support('title-tag');
        /*let wordpress handle the logo tag */
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
endif;


/* Register menus */

add_action('init', 'register_voteform_menus');
function register_voteform_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            // 'footer' => __('Footer Menu')
        )
    );
}


/* Setup logo */

add_action('after_setup_theme', 'voteforme_custom_logo_setup');
function voteforme_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}


/* Add stylesheets */

add_action('wp_enqueue_scripts', 'voteforme_scripts');
function voteforme_scripts()
{
    wp_enqueue_style('voteforme_styles', get_stylesheet_uri());
    wp_enqueue_style('agenda_styles',  get_template_directory_uri() . '/styles/agenda.css', array(), null, 'all');
    wp_enqueue_style('voteform_google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i,900,900i&display=swap');
    wp_enqueue_style('swiper_style', 'https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_script('swiper_script', 'https://unpkg.com/swiper/js/swiper.js', true);
}


// Add custom post types

add_action('init', 'propositions_custom_post_type', 0);
function propositions_custom_post_type()
{
    $labels = array(
        'name'                => _x('Propositions', 'Post Type General Name'),
        'singular_name'       => _x('Proposition', 'Post Type Singular Name'),
        'menu_name'           => __('Propositions'),
        'all_items'           => __('Toutes les propositions'),
        'view_item'           => __('Voir les propositions'),
        'add_new_item'        => __('Ajouter une nouvelle proposition'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer la proposition'),
        'update_item'         => __('Modifier la proposition'),
        'search_items'        => __('Rechercher une proposition'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __('Propositions'),
        'description'         => __('Tous sur les propositions'),
        'menu_icon'           =>    'dashicons-smiley',
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'propositions'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type('propositions', $args);
}



add_action('init', 'news_custom_post_type', 0);
function news_custom_post_type()
{
    $labels = array(
        'name'                => _x('Actualités', 'Post Type General Name'),
        'singular_name'       => _x('Actualité', 'Post Type Singular Name'),
        'menu_name'           => __('Actualités'),
        'all_items'           => __('Toutes les Actualités'),
        'view_item'           => __('Voir les Actualités'),
        'add_new_item'        => __('Ajouter une nouvelle actualité'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer l‘actualité'),
        'update_item'         => __('Modifier l‘actualité'),
        'search_items'        => __('Rechercher une actualité'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __('Actualités'),
        'description'         => __('Tous sur les actualités'),
        'menu_icon'           =>    'dashicons-admin-site-alt3',
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite'              => array('slug' => 'actualites'),

    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type('actualites', $args);
}



add_action('init', 'propositions_add_taxonomies', 0);
function propositions_add_taxonomies()
{
    $label_propositions = array(
        'name'                          => _x('Domaines', 'taxonomy general name'),
        'singular_name'                 => _x('Domaine', 'taxonomy singular name'),
        'search_items'                  => __('Chercher un domaine'),
        'all_items'                        => __('Tous les domaines'),
        'edit_item'                     => __('Editer le domaine'),
        'update_item'                   => __('Mettre à jour le domaine'),
        'add_new_item'                     => __('Ajouter un domaine'),
        'new_item_name'                 => __('Valeur du domaine'),
        'separate_items_with_commas'    => __('Séparer les domaines avec une virgule'),
        'menu_name'         => __('Domaines'),
    );

    $args_propositions = array(
        'hierarchical'      => true,
        'labels'            => $label_propositions,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'propositions'),
    );

    register_taxonomy('domaines', 'propositions', $args_propositions);
}


add_action('init', 'news_add_taxonomies', 0);
function news_add_taxonomies()
{
    $label_propositions = array(
        'name'                          => _x('Catégories', 'taxonomy general name'),
        'singular_name'                 => _x('Catégorie', 'taxonomy singular name'),
        'search_items'                  => __('Chercher une catégorie'),
        'all_items'                        => __('Tous les catégories'),
        'edit_item'                     => __('Editer la catégorie'),
        'update_item'                   => __('Mettre à jour la catégorie'),
        'add_new_item'                     => __('Ajouter une catégorie'),
        'new_item_name'                 => __('Valeur de la catégorie'),
        'separate_items_with_commas'    => __('Séparer les catégories avec une virgule'),
        'menu_name'         => __('Catégories'),
    );

    $args_propositions = array(
        'hierarchical'      => true,
        'labels'            => $label_propositions,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categories'),
    );

    register_taxonomy('categories', 'actualites', $args_propositions);
}
