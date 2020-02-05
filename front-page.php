<?php
get_header();
?>

<div class="hero-wrapper">
    <div class="hero-body">
        <div class="hero-img-wrapper">
            <div class="hero-title-wrapper">
                <div class="hero-line-1">
                    <?php echo get_theme_mod('cd_hero_title_first_line', 'Joshua Breuil') ?><br>
                </div>
                <div class="hero-line-2"><?php echo get_theme_mod('hero_title_2nd_line', 'Un Paris sur l‘avenir') ?><br></div>
            </div>
            <div class="color-hero-overlay"></div>
            <img class="hero-img" alt="" src="<?php if (get_theme_mod('cd_hero_image')) :
                                        $image_id =  get_theme_mod('cd_hero_image');
                                        echo wp_get_attachment_image($image_id, 'full');
                                    else : echo wp_get_attachment_image(84, 'full');
                                    endif; ?>">
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
            <a href="./index.php/programme/">
                En savoir plus
            </a>
        </div>
    </div>
</div>


<div class="commitments-wrapper">
    <div class="commitments-head-title"><?php echo get_theme_mod('cd_biography_title', 'Nos ambitions pour Paris') ?></div>
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
        <a href="./index.php/programme/">
            Découvrir le programme
        </a>
    </div>
</div>


<div class=" membership-wrapper text-center ptb-5">
    <div class="title-2 white-color mb-3">
        Nous avons besoin de vous !
    </div>
    <p class="paragraph-1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio odio doloremque aliquid. Quisquam iste illo quaerat perspiciatis nam ducimus nisi magnam voluptate, blanditiis a animi. Nesciunt rem esse blanditiis.</p>
    <div class="more-membership-button">
        <a href="./index.php/mouvement/">
            S'engager
        </a>
    </div>
</div>

<?php
get_footer();
?>