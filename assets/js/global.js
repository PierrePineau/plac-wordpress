const sliderFeatures = document.querySelector('#slider-feature');

if (sliderFeatures) {
    const slider = new Splide( sliderFeatures, {
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

    sliderFeatures.__instance = slider;
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
