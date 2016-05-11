<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/LocalBusiness" prefix="og: http://ogp.me/ns#">

<head>
   <title>Oscar Nilsson | Web Deasign &amp; Front-End Development - Oncolour</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Designer and Front-End Developer from Sweden. Working in Calgary, Canada."/> 
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

    <!--
     <link rel="stylesheet" href="/src/_build/f6.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/src/_build/oncolour.css">
    -->
    <!-- Scripts -->
    <script type="text/javascript" src="/js/vendor/modernizr.min.js"></script>
    <script type="text/javascript" src="/js/vendor/jquery.min.js"></script>
</head>





   <?php // Check REMOTE_ADDR  phpinfo(); ?>  
    <?php if($local = $_SERVER['REMOTE_ADDR'] ? 1 : 0) { 
    // Development
    ?>
    
    <script>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = '/src/_build/f6.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
          
          var font = document.createElement('link'); font.rel = 'stylesheet';
        font.href = '/css/font-awesome.min.css';
        var fontH = document.getElementsByTagName('head')[0]; fontH.parentNode.insertBefore(font, fontH);
          
          var gd = document.createElement('link'); gd.rel = 'stylesheet';
        gd.href = '/src/_build/oncolour.css';
        var gdH = document.getElementsByTagName('head')[0]; gdH.parentNode.insertBefore(gd, gdH);
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
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = '/css/f6.min.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
          
          var font = document.createElement('link'); font.rel = 'stylesheet';
        font.href = '/css/font-awesome.min.css';
        var fontH = document.getElementsByTagName('head')[0]; fontH.parentNode.insertBefore(font, fontH);
          
          var gd = document.createElement('link'); gd.rel = 'stylesheet';
        gd.href = '/css/oncolour.min.css';
        var gdH = document.getElementsByTagName('head')[0]; gdH.parentNode.insertBefore(gd, gdH);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <?php } ?>




<body id="body">

<nav class="header-bar">
            
                <a href="/" class="header-bar-logo"> Oscar Nilsson</a>
                <i class="fa fa-bars" aria-hidden="true"></i>
            
        </nav>