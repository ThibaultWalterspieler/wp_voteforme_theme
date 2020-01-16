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

})();