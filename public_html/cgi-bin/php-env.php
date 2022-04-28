<html>
 <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-L1K6XQ80EE"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-186942052-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-186942052-1');
  </script>
  <script src="https://cdn.lr-in-prod.com/LogRocket.min.js" crossorigin="anonymous"></script>
  <script>window.LogRocket && window.LogRocket.init('ma7ybc/theboringwebsite');</script> 
  <title>PHP Test</title>
 </head>
 <body>
   <?php echo '<h1 style="text-align:center;">Environment Variables</h1>';  
         echo '<hr/>';
  ?>
   <?php
      foreach (getallheaders() as $name => $value) {
        echo "<b>$name:</b> $value </br>";
      }

      echo "<br />";

      foreach($_SERVER as $key => $value){
        echo "<b>$name:</b> $value </br>";
      }
   ?>

   
    
 </body>
</html>
