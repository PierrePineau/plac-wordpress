console.log('global.js loaded');


const sliderFeature = document.querySelector('#slider-feature');

if (sliderFeature) {
    console.log('slider-feature');
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