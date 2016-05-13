<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/LocalBusiness" prefix="og: http://ogp.me/ns#">

<head>
    <title>Oscar Nilsson Portfolio |
        <?php echo $your_meta_title ?> - Oncolour</title>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <?php require '_above_the_fold_css.php';?>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $your_meta_description ?>" />
        <meta itemprop="name" content="Oncolour">
        <meta itemprop="description" content="Web Designer and Front-End Developer from Sweden. Working in Calgary, Canada.">
        <meta property="og:locale" content="en" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Oncolour" />
        <meta property="og:description" content="Web Designer and Front-End Developer from Sweden. Working in Calgary, Canada." />
        <meta property="og:url" content="http://www.oncolour.se" />
        <meta property="og:site_name" content="Oncolour" />
        <meta property="og:image" content="" />
        <meta name="application-name" content="Oncolour" />

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>

        <?php // Check REMOTE_ADDR  phpinfo(); ?>
            <?php if($local = $_SERVER['REMOTE_ADDR']=='127.0.0.1' ? 1 : 0) { 
    
    // Development
    ?>
                <script>
                    var cb = function () {
                        var l = document.createElement('link');
                        l.rel = 'stylesheet';
                        l.href = '/src/_build/f6.css';
                        var h = document.getElementsByTagName('head')[0];
                        h.parentNode.insertBefore(l, h);

                        var font = document.createElement('link');
                        font.rel = 'stylesheet';
                        font.href = '/css/font-awesome.min.css';
                        var fontH = document.getElementsByTagName('head')[0];
                        fontH.parentNode.insertBefore(font, fontH);

                        var gd = document.createElement('link');
                        gd.rel = 'stylesheet';
                        gd.href = '/src/_build/oncolour.css';
                        var gdH = document.getElementsByTagName('head')[0];
                        gdH.parentNode.insertBefore(gd, gdH);
                    };
                    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
                        webkitRequestAnimationFrame || msRequestAnimationFrame;
                    if (raf) raf(cb);
                    else window.addEventListener('load', cb);
                </script>

                <?php } else {
    // Production
    ?>

                    <script>
                        var cb = function () {
                            var l = document.createElement('link');
                            l.rel = 'stylesheet';
                            l.href = '/css/f6.min.css';
                            var h = document.getElementsByTagName('head')[0];
                            h.parentNode.insertBefore(l, h);

                            var font = document.createElement('link');
                            font.rel = 'stylesheet';
                            font.href = '/css/font-awesome.min.css';
                            var fontH = document.getElementsByTagName('head')[0];
                            fontH.parentNode.insertBefore(font, fontH);

                            var gd = document.createElement('link');
                            gd.rel = 'stylesheet';
                            gd.href = '/css/oncolour.min.css';
                            var gdH = document.getElementsByTagName('head')[0];
                            gdH.parentNode.insertBefore(gd, gdH);
                        };
                        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
                            webkitRequestAnimationFrame || msRequestAnimationFrame;
                        if (raf) raf(cb);
                        else window.addEventListener('load', cb);
                    </script>
                    <?php } ?>



</head>

<body id="body">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29701123-1', 'auto');
  ga('send', 'pageview');

</script>
    <nav class="header-bar">

        <a href="/" class="header-bar-logo"> Oscar Nilsson</a>
        <!--<i class="fa fa-bars" aria-hidden="true"></i> -->
        <a href="/#work"><i>View Projects</i></a>

    </nav>