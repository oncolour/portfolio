<?php require 'includes/page_header.php';?>


    <section class="hero">
        <nav role="navigation" class="row">
            <div class="large-9 columns">
                <a href="/"><img src="http://www.oncolour.se/wp-content/themes/oncolour-theme/img/logo-oncolour.png" alt="Logo home button"></a>
            </div>
            <div class="large-3 columns">
                <ul class="row">
                    <li class="large-4 columns"><a href="">Work</a></li>
                    <li class="large-4 columns"><a href="">About</a></li>
                    <li class="large-4 columns"><a href="">Contact</a></li>
                </ul>
            </div>
        </nav>
        <video id="hero-video" class="animated fadeIn" preload autoplay loop poster="assets/images/video-preload.jpg">
            <source src="assets/videos/nz.mp4" type="video/mp4"> Sorry, your browser doesn't support HTML5 video.

        </video>
        <div id="hero-content" class="row intro">

            <div class="small-centered medium-9 large-7 columns text-center fadeInUp">
                <h1>Hi, I'm Oscar Nilsson</h1>
                <p>A Swedish Web designer, currently living in Canada who’s passionate about interface design, usability and Wordpress.</p>
                <a role="button" class="button large" href="#work">Check out my work</a>
            </div>
        </div>
        <div class="preloader-nav">
            <span class="preloader-nav-touch small">Swipe up</span>
            <span class="preloader-nav-notouch">Scroll or use arrow keys</span>
        </div>
    </section>

    <!-- Include gallery section -->
    <?php include('includes/gallery.php'); ?>

        <?php require 'includes/page_footer.php' ?>