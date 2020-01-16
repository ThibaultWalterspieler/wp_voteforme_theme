<?php
/* Main Header Template */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="main-navigation-container">

            <a href="<?php echo home_url(); ?>">
                <img class=" logo-header" src="<?php echo get_template_directory_uri() ?>/images/josh.png">
            </a>

            <?php wp_nav_menu(
                $arg = array(
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary'
                )
            ) ?>
        </nav>
    </header>