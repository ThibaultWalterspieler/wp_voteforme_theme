<?php

function cd_customizer_settings($wp_customize)
{

    // *** CUSTOMISE HOME ***

    // Add section in customise
    $wp_customize->add_section('cd_biography', array(
        'title'      => 'Biography section',
        'priority'   => 20,
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
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
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
