$(document).ready(function() {
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
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            }
        }
    });
    $("#reviews").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 4,
        autoplay: 3000,
        stopOnHover: true,
        loop: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
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
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
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
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
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
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            }
        }
    });


    function init()
    {
        var current;
        var post = 0;
        setInterval(tick, 500);
    }

    function tick()
    {
        current = $("#reviews div.owl-item.active:first .item");
        // current.css("border", "3px solid red");

        post = current.attr('post');
        console.log(post);

        $("div.flash[post != '" + post + "']").hide();
        $("div.flash[post = '" + post + "']").show();
    }
    init();
});

