<?php require 'footer.php' ?>

<!-- Scripts -->
<?php if($local = $_SERVER['REMOTE_ADDR'] ? 1 : 0) { ?>
<!-- Development -->
<script async type="text/javascript" src="/js/vendor/jquery.min.js"></script>
<script type="text/javascript">

// Add a script element as a child of the body
 function downloadJSAtOnload() {
  var jsArray = ["/js/vendor/modernizr.min.js", "/js/vendor/foundation.min.js", "/js/vendor/motion-ui.min.js", "/src/javascripts/oncolour.js"];
     
     for (var i = 0; i < jsArray.length; i++) { 
     var element = document.createElement("script");
 element.src = jsArray[i];
 document.body.appendChild(element);
     }
 }

 // Check for browser support of event handling capability
 if (window.addEventListener)
 window.addEventListener("load", downloadJSAtOnload, false);
 else if (window.attachEvent)
 window.attachEvent("onload", downloadJSAtOnload);
 else window.onload = downloadJSAtOnload;

</script>
  <?php } else {?>
<!-- Production -->
<script type="text/javascript" src="/js/vendor/jquery.min.js"></script>
<script type="text/javascript">

// Add a script element as a child of the body
 function downloadJSAtOnload() {
  var jsArray = ["/js/vendor/modernizr.min.js", "/js/vendor/foundation.min.js", "/js/vendor/motion-ui.min.js", "/js/oncolour.min.js"];
     
     for (var i = 0; i < jsArray.length; i++) { 
     var element = document.createElement("script");
 element.src = jsArray[i];
 document.body.appendChild(element);
     }
 }

 // Check for browser support of event handling capability
 if (window.addEventListener)
 window.addEventListener("load", downloadJSAtOnload, false);
 else if (window.attachEvent)
 window.attachEvent("onload", downloadJSAtOnload);
 else window.onload = downloadJSAtOnload;

</script>
<!-- End Production imports -->
<?php } ?>

</body>

</html>