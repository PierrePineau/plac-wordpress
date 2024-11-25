// On regearde si on est en haut de la page, si oui on ajoute une classe sinon
window.addEventListener('scroll', function() {
    let siteheaders = document.querySelector('.site-header');
    if (window.scrollY > 0) {
        siteheaders.classList.add('scrolled');
    } else {
        siteheaders.classList.remove('scrolled');
    }
});


// const sliderFeatures = document.querySelector('#slider-feature');

if (document.querySelector('#slider-feature')) {
    const slider = new Splide('#slider-feature', {
        // type       : 'loop',
        rewind     : true,
        autoplay   : true,
        interval   : 5000,
        pauseOnHover: true,
        arrows     : false,
        pagination : true,
        mediaQuery: 'min',
        perPage: 1,
        breakpoints : {
            768: {
                // destroy: true,
            },
        }
    } ).mount();

    document.querySelector('#slider-feature').__instance = slider;
}
