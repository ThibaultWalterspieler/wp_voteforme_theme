<?php
get_header();
?>
<div class="hero-com-wrapper">
    <h2 class="catch">Construisons demain</h2>
</div>
<div class="presentation-wrapper">
    <div class="presentation-image-wrapper">
        <img <?php if (get_theme_mod('cd_mouvement_image')) :
                                        $image_id =  get_theme_mod('cd_mouvement_image');
                                        echo wp_get_attachment_image($image_id, 'full');
                                    else : echo wp_get_attachment_image(84, 'full');
                                    endif; ?> 
    </div>
    <div class="presentation-text-wrapper">
        <div class="presentation-text">"Paris Avenir" est un mouvement politique et citoyen qui poursuit une ambition : remettre les parisiens au cœur de la vie politique municipale.</div>
    </div>
</div>

<div class="quotes-wrapper">
    <div class="quotes">Nous n'héritons pas de la terre de nos parents, nous l'empruntons à nos enfants.</div>
    <div class="quotes-author">Antoine de Saint-Exupéry</div>
</div>

<div class="mouvement-text-wrapper ptb-5">
    <div class="title-2 white-color text-center mb-3">
        Paris Avenir, pour un futur radieux
    </div>
    <p class="paragraph-1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque culpa dolorem fuga ab tempora exercitationem omnis beatae quas, dignissimos sit hic necessitatibus impedit optio asperiores cumque. Delectus laboriosam commodi harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae perferendis earum, dolore excepturi, unde similique neque magnam voluptatum aliquid officiis eligendi soluta quos maiores. Ea unde cumque delectus quod laborum!</p>
</div>

<div class="membership-wrapper text-center ptb-5">
    <div class="title-2 white-color mb-3">
        Nous avons besoin de vous !
    </div>
    <p class="paragraph-1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio odio doloremque aliquid. Quisquam iste illo quaerat perspiciatis nam ducimus nisi magnam voluptate, blanditiis a animi. Nesciunt rem esse blanditiis.</p>
    <div class="form-container">
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Adresse email</label>
        </div>
    </div>
</div>



<?php get_footer(); ?>