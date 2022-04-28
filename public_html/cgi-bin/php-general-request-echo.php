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
  <title>PHP General Request Test</title>
 </head>
 <body>
    <?php 
        header("Cache-Control: no-cache");
        header("Content-type: text/html");
    ?>

    <?php
        echo "<h1 align='center'>General Request Echo</h1>";
        echo "<hr>";
    ?>

    <?php 
        echo "<p><b>HTTP Protocol:</b> {$_SERVER{SERVER_PROTOCOL}}</p>";
        echo  "<p><b>HTTP Method:</b> {$_SERVER{REQUEST_METHOD}}</p>";
        echo "<p><b>Query String:</b> {$_SERVER{QUERY_STRING}}</p>";

        $queryBody = file_get_contents('php://input'); 
        echo "<p><b>Message Body:</b> {$queryBody}</p>";
    ?>
    
 </body>
</html>
