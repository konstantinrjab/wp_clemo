jQuery(document).ready(function ($) {
    $("#banner-owl").owlCarousel({
        // navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 1,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        animateOut: 'fadeOut'
    });
    $("#best-team-owl").owlCarousel({
        // navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            }
        }
    });
    $("#instagram").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 4,
        // autoplay: 3000,
        stopOnHover: true,
        // loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            }
        }
    });
    $("#related-posts").owlCarousel({
        // navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            }
        }
    });
    $("#work").owlCarousel({
        // navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            }
        }
    });

    var owlReviews = $('#reviews');
    owlReviews.on('initialized.owl.carousel', function (event) {
        var flash = $('div.flash');
        flash.hide();
        flash.eq(0).show();
    });

    $(owlReviews).owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 4,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        center: true,
        responsiveClass: true,
        responsive: {
            576: {
                items: 3
            },
            768: {
                items: 4
            }
        }
    });

    owlReviews.on('changed.owl.carousel', function (event) {

        var current = event.item.index;
        var post = $(event.target).find(".owl-item").eq(current).find('img').attr('post');

        $("div.flash[post != '" + post + "']").hide();
        $("div.flash[post  = '" + post + "']").show();
    });
});

