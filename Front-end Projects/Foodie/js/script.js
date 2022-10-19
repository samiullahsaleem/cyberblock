//PRELOADER
$(window).on('load', function () {
    $('.load-logo').fadeOut();
    $('.preloader').delay(350).fadeOut();
});



//NAVBAR COLOR CHANGE
$(
    function () {
        showHideNav();
        $(window).scroll(function () {
            showHideNav();
        });

        function showHideNav() {
            if ($(window).scrollTop() > 50) {
                $("nav").addClass("foodie-nav-bg");
                $(".navbar-brand img").attr("src", "img/logo/RED.png");
            }
            else {
                $("nav").removeClass("foodie-nav-bg");
                $(".navbar-brand img").attr("src", "img/logo/WHITE.png");

            }
        }
    }
);

