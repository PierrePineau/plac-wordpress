const sliderFeature = document.querySelector('#slider-feature');

if (sliderFeature) {
    const slider = new Splide( sliderFeature, {
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

    sliderFeature.__instance = slider;
}

const headerContainer = document.querySelector('.site-header');
// On regearde si on est en haut de la page, si oui on ajoute une classe sinon
window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        headerContainer.classList.add('scrolled');
    } else {
        headerContainer.classList.remove('scrolled');
    }
});
