<?php

function cd_customizer_settings($wp_customize)
{

    // *! CUSTOMISE HOME *!

    // *** HERO ***
    // Add section hero
    $wp_customize->add_section('cd_hero', array(
        'title'      => 'Home - Hero section',
        'priority'   => 1,
    ));

    // Add settings for HERO image
    $wp_customize->add_setting('cd_hero_image', array(
        'default' => wp_get_attachment_image(84, 'full'),
    ));

    // Add setting for overlay background color 
    $wp_customize->add_setting('hero_overlay_color', array(
        'default'     => '#50D890',
        'transport'   => 'refresh',
    ));

    // Add setting for hero title first-line
    $wp_customize->add_setting('cd_hero_title_first_line', array(
        'default'     => 'Joshua Breuil',
        'transport'   => 'postMessage',
    ));
    $wp_customize->get_setting('cd_hero_title_first_line')->transport = 'postMessage';

    // Add setting for hero title first-line
    $wp_customize->add_setting('cd_hero_title_2nd_line', array(
        'default'     => 'Un Paris sur l‘avenir',
        'transport'   => 'postMessage',
    ));
    $wp_customize->get_setting('cd_hero_title_2nd_line')->transport = 'postMessage';

    // Add setting for title-decoration
    $wp_customize->add_setting('hero_decoration', array(
        'default'     => '#FF6A58',
        'transport'   => 'refresh',
    ));

    // Add Controls for overlay background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_overlay_color', array(
        'label'      => __('Background color', 'mytheme'),
        'section' => 'cd_hero',
        'settings'   => 'hero_overlay_color',
        'description' => 'Change the overlay background color',
    )));

    // Add Controls for hero title line one
    $wp_customize->add_control('cd_hero_title_first_line', array(
        'label' => 'Title - First line',
        'description' => 'Change the text content',
        'section'    => 'cd_hero',
        'type'     => 'text',
    ));

    // Add Controls for hero title line one
    $wp_customize->add_control('cd_hero_title_2nd_line', array(
        'label' => 'Title - 2nd line',
        'description' => 'Change the text content',
        'section'    => 'cd_hero',
        'type'     => 'text',
    ));

    // Add Controls for overlay background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_decoration', array(
        'label'      => __('Title-decoration color', 'mytheme'),
        'section' => 'cd_hero',
        'settings'   => 'hero_decoration',
        'description' => 'Change the hero-decoration color',
    )));

    // *** BIOGRAPHY ***

    // Add section bio
    $wp_customize->add_section('cd_biography', array(
        'title'      => 'Home - Biography section',
        'priority'   => 2,
    ));

    // Add settings for biography background color
    $wp_customize->add_setting('biography_background_color', array(
        'default'     => '#7E9AFF',
        'transport'   => 'refresh',
    ));

    // Add settings for biography text color
    $wp_customize->add_setting('biography_text_color', array(
        'default'     => '#fff',
        'transport'   => 'refresh',
    ));
    $wp_customize->get_setting('biography_text_color')->transport = 'postMessage';

    // Add settings for biography h2 size
    $wp_customize->add_setting('biography_h2_size', array(
        'default'     => '7rem',
        'transport'   => 'refresh',
    ));

    // **** CONTROLS ****
    // Add settings for biography h2 content
    $wp_customize->add_setting('cd_biography_title', array(
        'default'     => 'Le candidat de l‘écologie humaniste',
        'transport'   => 'postMessage',
    ));
    $wp_customize->get_setting('cd_biography_title')->transport = 'postMessage';

    // Add settings for biography p content
    $wp_customize->add_setting('cd_biography_txt', array(
        'default'     => 'Mon abition pour 2020, devenir le premier maire écologiste de notre capitale pour la transformer, la préparer au défi climatique et permettre à tout.e.s de vivre mieux.',
        'transport'   => 'postMessage',
    ));
    $wp_customize->get_setting('cd_biography_txt')->transport = 'postMessage';

    // Add settings for image
    $wp_customize->add_setting('cd_biography_image', array(
        'default' => wp_get_attachment_image(84, 'full'),
    ));

    // Add Controls for biography background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'biography_bg_color', array(
        'label'      => __('Background color', 'mytheme'),
        'section' => 'cd_biography',
        'settings'   => 'biography_background_color',
        'description' => 'Change the background-color',
    )));

    // Add Controls for biography text color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'label'      => __('Text color', 'mytheme'),
        'section' => 'cd_biography',
        'settings'   => 'biography_text_color',
        'description' => 'Change the color of the text',
    )));


    // Add Controls for biography text size
    $wp_customize->add_control('biography_h2_size', array(
        'label'      => __('H2 font-size (rem)', 'mytheme'),
        'section' => 'cd_biography',
        'settings'   => 'biography_h2_size',
        'description' => 'Change the size of the title',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 13,
            'step' => .1
        )
    ));

    // Add Controls for biography h2 content
    $wp_customize->add_control('cd_biography_title', array(
        'label' => 'H2 content',
        'description' => 'Change the section title',
        'section'    => 'cd_biography',
        'type'     => 'text',
    ));

    // Add Controls for biography h2 content
    $wp_customize->add_control('cd_biography_txt', array(
        'label' => 'p content',
        'description' => 'Change the text content',
        'section'    => 'cd_biography',
        'type'     => 'textarea',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'cd_biography_image', array(
        'label' => __('Featured Home Page Image', 'theme_textdomain'),
        'section' => 'cd_biography',
        'mime_type' => 'image',
    )));

      // Add Controls for hero background image
      $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'cd_hero_image', array(
        'label' => __('Hero image', 'theme_textdomain'),
        'section' => 'cd_hero',
        'mime_type' => 'image',
    )));


    // *! CUSTOMISE LE MOUVEMENT *!

    // *** MOUVEMENT ***
    // Add section MOUVEMENT
    $wp_customize->add_section('cd_mouvement', array(
            'title'      => 'Mouvement',
            'priority'   => 4,
    ));

    // Add settings for MOUVEMENT image
    $wp_customize->add_setting('cd_mouvement_image', array(
        'default' => wp_get_attachment_image(84, 'full'),
    ));


    // Add Controls for MOUVEMENT image
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'cd_mouvement_image', array(
        'label' => __('Programme image', 'theme_textdomain'),
        'section' => 'cd_mouvement',
        'mime_type' => 'image',
    )));


        // *! CUSTOMISE PROGRAMME *!

    // *** PROGRAMME ***
    // Add section Programme
    $wp_customize->add_section('cd_programme', array(
        'title'      => 'Programme',
        'priority'   => 3,
));

// Add settings for Programme image
$wp_customize->add_setting('cd_programme_image', array(
    'default' => wp_get_attachment_image(84, 'full'),
));


// Add Controls for programme image
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'cd_programme_image', array(
    'label' => __('Programme image', 'theme_textdomain'),
    'section' => 'cd_programme',
    'mime_type' => 'image',
)));



}
add_action('customize_register', 'cd_customizer_settings');

function cd_customizer()
{
    wp_enqueue_script(
        'cd_customizer',
        get_template_directory_uri() . '/customise.js',
        array('customize-preview'),
        '',
        true
    );
}

function mytheme_customize_css()
{
?>
    <style type="text/css">
        .hero-title-wrapper::before {
            background-color: <?php echo get_theme_mod('hero_decoration', '#50D890'); ?>;
        }

        .color-hero-overlay {
            background-color: <?php echo get_theme_mod('hero_overlay_color', '#50D890'); ?>;
        }

        .biography-text {
            background-color: <?php echo get_theme_mod('biography_background_color', '#7E9AFF'); ?>;
        }

        .biography-text h2 {
            font-size: <?php echo get_theme_mod('biography_h2_size', '7'); ?>rem;
        }

        .biography-text>p,
        .biography-text>h2,
        .more-candidate-button {
            color: <?php echo get_theme_mod('biography_text_color', '#fff'); ?>;
        }
    </style>
<?php
}
add_action('wp_head', 'mytheme_customize_css');


function cd_preview_customizer()
{
    wp_enqueue_script(
        'cd_customizer',
        get_template_directory_uri() . '/customise.js',
        array('jquery', 'customize-preview'),
        '',
        true
    );
}
add_action('customize_preview_init', 'cd_preview_customizer');
