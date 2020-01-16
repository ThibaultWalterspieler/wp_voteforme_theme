<?php


include('customise.php');

if (!function_exists('voteforme_setup')) :
    function voteforme_setup()
    {
        /*let wordpress handle the titles tag */
        add_theme_support('title-tag');
        /*let wordpress handle the logo tag */
        add_theme_support('custom-logo');
    }
endif;

add_action('after_setup_theme', 'voteforme_setup');

/* Register menus */

function register_voteform_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            // 'footer' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_voteform_menus');


/* Setup logo */

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
add_action('after_setup_theme', 'voteforme_custom_logo_setup');


/* Add stylesheets */

function voteforme_scripts()
{
    wp_enqueue_style('voteforme_styles', get_stylesheet_uri());
    wp_enqueue_style('agenda_styles',  get_template_directory_uri() . '/styles/agenda.css', array(), null, 'all');
    wp_enqueue_style('voteform_google_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i,900,900i&display=swap');
    wp_enqueue_style('swiper_style', 'https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_script('swiper_script', 'https://unpkg.com/swiper/js/swiper.js', true);
}
add_action('wp_enqueue_scripts', 'voteforme_scripts');
