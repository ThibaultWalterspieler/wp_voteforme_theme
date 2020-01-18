<?php
get_header();
?>
<div class="hero-com-wrapper">
    <h2 class="catch txt-xxl">Actualités</h2>
</div>


<div class="articles-row pt-4">
    <?php
    $args = array(
        'post_type' => 'actualites',
    );
    $query = new WP_Query($args);

    while ($query->have_posts()) {
        $query->the_post();
        echo '    <div class="news-article-col prl-2 mb-3">
        <div class="news-card shadow lift">
            <div class="news-thumbnail">
            
                <img src="' . get_the_post_thumbnail_url() . '" alt="">
            </div>

            <div class="card-body p-2">
                <h4 class="card-title mb-d1">
                    <a class="txt-m fw-b">
                    ' . get_the_title() . '
                    </a>
                </h4>

                <div class="mb-d1">
                    <small class="txt-xs fw-m txt-color-sub ">
                    ' . get_the_date() . '
                    </small>
                </div>

                <div>
                    <small class="txt-xs">
                        ' .  substr(get_the_content(), 0, 150) . '...
                    </small>
                </div>

                <div class="fw-m mt-1 txt-s">
                    Lire la suite
                </div>
            </div>
        </div>
    </div>';
    }
    ?>


</div>



<?php get_footer(); ?>