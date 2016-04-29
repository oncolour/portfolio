(function ($) {
    "use strict";
    $(document).ready(function () {

        $(document).foundation();

        /*var vid = document.getElementById("hero-video");
        vid.oncanplaythrough = function () {
            vid.className += vid.className ? 'loaded' : 'loaded';
        };*/


        var body = document.getElementById("body");
        // Detect if mobile / touch device.
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            body.className += body.className ? "touch-device" : "touch-device";
        } else {
            body.className += body.className ? "no-touch" : "no-touch";
        }

        // Defer images
        /*        function init() {
                    var imgDefer = document.getElementsByTagName('img');

                    for (var I = 0; I < imgDefer.length; I++) {
                        if (imgDefer[I].getAttribute('data-src')) {
                            imgDefer[I].setAttribute('src', imgDefer[I].getAttribute('data-src'));
                            if (imgDefer[I].getAttribute('data-src') !== "") {
                                imgDefer[I].removeAttribute('data-src', "");
                            }
                        }
                    }
                }
                window.onload = setTimeout(init, 3000);*/
        function init() {
            $('.travel-gallery-image').each(function (i) {

                var bottom_of_object = $(this).position().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
                var deferImg = bottom_of_window + 600;

                if (deferImg > bottom_of_object) {
                    var imgDefer = $(this);

                    for (var I = 0; I < imgDefer.length; I++) {
                        if (imgDefer[I].getAttribute('data-src')) {
                            imgDefer[I].setAttribute('src', imgDefer[I].getAttribute('data-src'));
                            if (imgDefer[I].getAttribute('data-src') !== "") {
                                imgDefer[I].removeAttribute('data-src', "");
                            }
                        }
                    }
                }
            });
        }

        window.onload = init;

        // Fade in on Scroll function      
        $(function () {

            $(window).scroll(function () {
                init();
                console.log('scrolled');

                $('.travel-gallery-image').each(function (i) {

                    var bottom_of_object = $(this).position().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */

                    bottom_of_window = bottom_of_window + 200;
                    if (bottom_of_window > bottom_of_object) {

                        $(this).animate({
                            'opacity': '1'
                        }, 500);

                    }
                });

            });

        });

        // End Fade in on Scroll      

    });
})(jQuery);