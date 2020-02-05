(function () {

    // live preview of biography_background_color
    wp.customize('biography_background_color', function (value) {
        value.bind(function (newval) {
            document.querySelector('.biography-text ').style.color = newval;
        });
    });

    // live preview of cd_biography_title
    wp.customize('cd_biography_title', function (value) {
        value.bind(function (newval) {
            const title = document.querySelector('.biography-text h2');
            title.innerHTML = newval;
        });
    });

    // live preview of cd_biography_title
    wp.customize('cd_biography_txt', function (value) {
        value.bind(function (newval) {
            const title = document.querySelector('.biography-text p');
            title.innerHTML = newval;
        });
    });

    // live preview of cd_biography_title_first_line
    wp.customize('cd_hero_title_first_line', function (value) {
        value.bind(function (newval) {
            const title = document.querySelector('.hero-line-1');
            title.innerHTML = newval;
        });
    });

    // live preview of cd_biography_title_2nd_line
    wp.customize('cd_hero_title_2nd_line', function (value) {
        value.bind(function (newval) {
            const title = document.querySelector('.hero-line-2');
            title.innerHTML = newval;
        });
    });

    // live preview of cd_ambition_title
    wp.customize('cd_ambition_title', function (value) {
        value.bind(function (newval) {
            const title = document.querySelector('.commitments-head-title');
            title.innerHTML = newval;
        });
    });


})();