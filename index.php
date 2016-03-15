<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oncolour</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
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
    </section>
    <!-- Include gallery section -->
    <?php include('includes/gallery.php'); ?>


        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/what-input/what-input.js"></script>
        <script src="bower_components/foundation-sites/dist/foundation.js"></script>
        <script src="js/app.js"></script>
</body>

</html>