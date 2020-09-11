jQuery(document).ready(function($) {
    $('.planes_items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                slidesPerRow: 1,
                rows: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: false
            }
        }, {
            breakpoint: 778,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: false,
                autoplay: true,
                infinite: true,
                autoplaySpeed: 4000,
                dots: false,
            }
        }, ]
    });
});
// 
// Slick Slider
// 
jQuery(document).ready(function($) {
    $('.especialidades_section').slick({
        dots: false,
        slidesPerRow: 1,
        rows: 2,
        slidesToShow: 4,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    slidesPerRow: 1,
                    rows: 1,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    dots: false
                }
            }, {
                breakpoint: 778,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: false,
                    autoplay: true,
                    infinite: true,
                    autoplaySpeed: 4000,
                    dots: false,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    dots: false
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
//Galeria
jQuery(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    jQuery(this).ekkoLightbox();
});
//Menu responsive - Scroll
jQuery(window).on('scroll', function() {
    var b = jQuery(window).scrollTop();
    if (b > 100) {
        jQuery(".menu_logo_flotante").addClass("scroll");
    } else {
        jQuery(".menu_logo_flotante").removeClass("scroll");
    }
});

jQuery(document).ready(function($) {
  $('#formulario_questionable .acf-radio-list label').addClass('radio')

  $('#formulario_questionable .acf-radio-list label input').addClass('hidden')
  $('#formulario_questionable .acf-radio-list label input').after(' <span class="label"></span>')

});