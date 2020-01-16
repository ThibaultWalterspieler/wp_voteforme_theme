<?php
get_header();
?>

<div class="hero-wrapper">
    <div class="hero-body">
        <div class="hero-img-wrapper">
            <div class="hero-title-wrapper">
                Joshua Breuil<br>Un Paris sur l'avenir
            </div>
            <div class="color-hero-overlay"></div>
            <img class="hero-img" alt="" src="<?php echo wp_get_attachment_image(64, 'full') ?>">
        </div>
    </div>
</div>

<div class="biography-wrapper">
    <div class="candidate-picture">
        <img class="bio-img" src="<?php if (get_theme_mod('cd_biography_image')) :
                                        $image_id =  get_theme_mod('cd_biography_image');
                                        echo wp_get_attachment_image($image_id, 'full');
                                    else : echo wp_get_attachment_image(84, 'full');
                                    endif; ?>">
    </div>
    <div class=" biography-text">
        <h2><?php echo get_theme_mod('cd_biography_title', 'Le candidat de l‘écologie humaniste') ?></h2>
        <p><?php echo get_theme_mod('cd_biography_txt', 'Le candidat de l‘écologie humaniste') ?></p>
        <div class="more-candidate-button">
            <a href="<?php echo get_template_directory_uri() ?>/notre-candidat/">
                En savoir plus
            </a>
        </div>
    </div>
</div>


<div class="commitments-wrapper">
    <div class="commitments-head-title">Nos ambitions pour Paris</div>
    <div class="commitments-cards-wrapper">
        <div class="commitments-card">
            <div class="commitment-quotes">Rendre Paris plus vert</div>
            <div class="commitment-desc">Redonner place à la nature en ville partout où cela est possible, dans nos rues, sur nos toits...</div>
        </div>
        <div class="commitments-card">
            <div class="commitment-quotes">Rendre Paris plus vert</div>
            <div class="commitment-desc">Redonner place à la nature en ville partout où cela est possible, dans nos rues, sur nos toits...</div>
        </div>
        <div class="commitments-card">
            <div class="commitment-quotes">Rendre Paris plus vert</div>
            <div class="commitment-desc">Redonner place à la nature en ville partout où cela est possible, dans nos rues, sur nos toits...</div>
        </div>
        <div class="commitments-card">
            <div class="commitment-quotes">Rendre Paris plus vert</div>
            <div class="commitment-desc">Redonner place à la nature en ville partout où cela est possible, dans nos rues, sur nos toits...</div>
        </div>
    </div>
    <div class="more-commitements-button">
        <a href="<?php echo get_template_directory_uri() ?>/programme/">
            Découvrir le programme
        </a>
    </div>
</div>


<div class="membership-wrapper">
    <div class="membership-title">
        Nous avons besoin de vous !
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio odio doloremque aliquid. Quisquam iste illo quaerat perspiciatis nam ducimus nisi magnam voluptate, blanditiis a animi. Nesciunt rem esse blanditiis.</p>
    <div class="more-membership-button">
        <a href="<?php echo get_template_directory_uri() ?>/mouvement/">
            S'engager
        </a>
    </div>
</div>

<?php
get_footer();
?>