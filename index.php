<?php 
    $your_meta_title = "Web Deasign and Front-End Development";
$your_meta_description = "Web Designer and Front-End Developer from Sweden. Working in Calgary, Canada.";
require 'includes/page_header.php'; ?>

    <section class="hero-wrapper">


        <video id="hero-video" class="animated fadeIn" preload autoplay loop poster="/images/video-preload.jpg">
            <?php if($local = $_SERVER['REMOTE_ADDR']=='127.0.0.1' ? 1 : 0) { ?>
                <source src="/videos/nz.mp4" type="video/mp4"> Sorry, your browser doesn't support HTML5 video.
                <?php } else { ?>
                    <source src="/videos/nz.mp4" type="video/mp4"> Sorry, your browser doesn't support HTML5 video.
                    <?php } ?>
        </video>
        <div id="hero-content" class="">

            <div class="fadeInUp">
                <h1>Hi, I'm Oscar Nilsson</h1>
                <p>Web Designer &amp; Front-End Developer with a great interest in UI/UX design.</p>
                <a role="button" class="button large scroll" href="#work">View My Work</a>
            </div>
        </div>
        <div class="job">
            <a class="hire-me" href="mailto:oscar@oncolour.se"></a>
            <h3>Available for work!</h3>
            <p>I'm currently looking for work in Stockholm, Sweden / Calgary, AB Canada</p>

        </div>
        <div class="preloader-nav">
            <span class="preloader-nav-touch small">Swipe up</span>
            <span class="preloader-nav-notouch">Scroll or use arrow keys</span>
        </div>
    </section>

    <!-- Include gallery section -->
    <?php include('includes/gallery.php'); ?>

        <?php require 'includes/page_footer.php' ?>