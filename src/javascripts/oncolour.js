(function ($) {
    "use strict";
    $(document).ready(function () {

        $(document).foundation();

        /*var vid = document.getElementById("hero-video");
        vid.oncanplaythrough = function () {
            vid.className += vid.className ? 'loaded' : 'loaded';
        };*/




        var touchDevice = false;
        var theUrl = window.location.href;
        var body = document.getElementById("body");

        // Detect if mobile / touch device.
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            body.className += body.className ? "touch-device" : "touch-device";
            touchDevice = true;
        } else {
            body.className += body.className ? "no-touch" : "no-touch";
            touchDevice = false;
        }

        //Change color of Header bar (name) when scrolling past given height
        function changeHeaderColor(windowH) {
            $(window).scroll(function () {
                if (windowH <= document.body.scrollTop) {

                    $('.header-bar .header-bar-logo').css("color", "red");
                } else {
                    $('.header-bar .header-bar-logo').css("color", "#fafafa");
                }
            });
        }

        //Checking if we are on a project page and need to change color at 60% height of hero
        if (theUrl.toLowerCase().indexOf("projects") >= 0 && touchDevice === false) {
            changeHeaderColor(window.innerHeight / 2);
        } else {
            changeHeaderColor(window.innerHeight);
        } 

       //Scroll on click to Link #ID   
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();

            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });


        // Defer images
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

        var h = window.innerHeight;
        console.log(h);
        console.log(document.body.offsetHeight);





        // Next Project Array Object
        var myBackground = [
            {
                title: "Traverser",
                background: "traverser-next-project.jpg",
                urlString: "traverser"
            },
            {
                title: "Gotime",
                background: "gotime-next-project.jpg",
                urlString: "gotime"

            },
            {
                title: "Falk",
                background: "falk-next-project.jpg",
                urlString: "falk"
        },
            {
                title: "Seleste",
                background: "seleste-next-project.jpg",
                urlString: "seleste"
        },
            {
                title: "Feskarn",
                background: "feskarn-next-project.jpg",
                urlString: "feskarn"
        },
            {
                title: "Masterpiece Retirement",
                background: "masterpiece-next-project.jpg",
                urlString: "masterpiece"
        },
            {
                title: "Island Birds",
                background: "island-birds-next-project.jpg",
                urlString: "island-birds"
        },
            {
                title: "GDservice",
                background: "gdservice-next-project.jpg",
                urlString: "gdservice"
        },
            {
                title: "Intoria",
                background: "intoria-next-project.jpg",
                urlString: "intoria"
        }];

        // Generates a number between 0 and the amount of objects in $myBackground
        var numRand = Math.floor(Math.random() * myBackground.length);

        // Get Url to string
        var myUrl = window.location.href;

        // Populate Next Project with Background and Title
        // Check if url contains the random generated title
        // If it does, default to showing [5] in the array (Masterpiece)
        // Else populate with the random number generated
        if (myUrl.toLowerCase().indexOf(myBackground[numRand].urlString.toLocaleLowerCase()) >= 0) {
            numRand = myBackground.length - numRand;
            $('.next-project').css({
                "background": "url('" + "../../src/images/" + myBackground[numRand].background + "') center center / cover",
            });

            $('.next-project-title').append(myBackground[5].title);

        } else {
            $('.next-project').css({
                "background": "url('" + "../../src/images/" + myBackground[numRand].background + "') center center / cover",
            });

            $('.next-project-title').append(myBackground[numRand].title);
        }






    });
})(jQuery);