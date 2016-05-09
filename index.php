<?php require 'includes/page_header.php'; ?>

    <section class="hero-wrapper">
        
        <video id="hero-video" class="animated fadeIn" preload loop>
            <!--<source src="src/videos/nz.mp4" type="video/mp4"> Sorry, your browser doesn't support HTML5 video.-->

        </video>
        <div id="hero-content" class="">

            <div class=" fadeInUp">
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