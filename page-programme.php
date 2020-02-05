<?php
get_header();
?>
<div class="hero-com-wrapper">
    <h2 class="catch">Réinventons Paris</h2>
</div>
<div class="presentation-wrapper">
    <div class="presentation-text-wrapper">
        <div class="presentation-text">
            Obsédée par la compétition économique et la recherche de toujours plus d’attractivité, notre ville sacrifie le climat, et empêche une grande partie des Parisiennes et des Parisiens de vivre correctement dans la capitale.
        </div>
    </div>
    <div class="presentation-image-wrapper">
        <img src="<?php if (get_theme_mod('cd_hero_image')) :
                                        $image_id =  get_theme_mod('cd_programme_image');
                                        echo wp_get_attachment_image($image_id, 'full');
                                    else : echo wp_get_attachment_image(84, 'full');
                                    endif; ?>" ?>
    </div>
</div>



<div class=" agenda-wrapper">
        <h3>Écologie</h3>
        <div class="desc-agenda">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint reiciendis odio blanditiis vero deserunt quaerat, voluptatibus adipisci explicabo. Fugiat reiciendis cum nulla soluta impedit unde amet facilis! Tempora, sed?
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php
                $args = array(
                    'post_type' => 'propositions',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'domaines',
                            'field' => 'slug',
                            'terms' => 'ecologie'
                        ),
                    ),
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="swiper-slide">
<div class="swiper-title">' . get_the_title() . '</div>
<div class="swiper-desc">' . get_the_content() . '</div>
</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="agenda-wrapper urban">
        <h3>Urbanisme</h3>
        <div class="desc-agenda">
            Paris souffre de la pollution, du trafic ingérable, des bruits permanents, du manque d’espace pour marcher ou simplement se poser.
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'propositions',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'domaines',
                            'field' => 'slug',
                            'terms' => 'urbanisme'
                        ),
                    ),
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="swiper-slide">
                        <div class="swiper-title">' . get_the_title() . '</div>
                        <div class="swiper-desc">' . get_the_content() . '</div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="agenda-wrapper social">
        <h3>Social</h3>
        <div class="desc-agenda">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint reiciendis odio blanditiis vero deserunt quaerat, voluptatibus adipisci explicabo. Fugiat reiciendis cum nulla soluta impedit unde amet facilis! Tempora, sed?
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'propositions',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'domaines',
                            'field' => 'slug',
                            'terms' => 'social'
                        ),
                    ),
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="swiper-slide">
                    <div class="swiper-title">' . get_the_title() . '</div>
                    <div class="swiper-desc">' . get_the_content() . '</div>
                    </div>';
                }
                ?>

            </div>
        </div>
    </div>




    <div class="agenda-wrapper mobility">
        <h3>Mobilité</h3>
        <div class="desc-agenda">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint reiciendis odio blanditiis vero deserunt quaerat, voluptatibus adipisci explicabo. Fugiat reiciendis cum nulla soluta impedit unde amet facilis! Tempora, sed?
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'propositions',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'domaines',
                            'field' => 'slug',
                            'terms' => 'mobilite'
                        ),
                    ),
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="swiper-slide">
                    <div class="swiper-title">' . get_the_title() . '</div>
                    <div class="swiper-desc">' . get_the_content() . '</div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class=" membership-wrapper text-center ptb-5">
        <div class="title-2 white-color mb-3">
            Nous avons besoin de vous !
        </div>
        <p class="paragraph-1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio odio doloremque aliquid. Quisquam iste illo quaerat perspiciatis nam ducimus nisi magnam voluptate, blanditiis a animi. Nesciunt rem esse blanditiis.</p>
        <div class="more-membership-button">
            <a href="<?php echo get_template_directory_uri() ?>./mouvement/">
                S'engager
            </a>
        </div>
    </div>






    <?php
    wp_enqueue_script('scroll_script', get_template_directory_uri() . '/scripts/scroll.js', true);
    ?>
    <?php
    get_footer();
    ?>