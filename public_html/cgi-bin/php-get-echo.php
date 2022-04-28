<!DOCTYPE html>
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
    <title>PHP GET Request Test</title>
 </head>
 <body>
    <?php 
        header("Cache-Control: no-cache");
        header("Content-type: text/html");
    ?>

    <?php
        echo "<h1 align='center'>Get Request Echo</h1>";
        echo "<hr>";
    ?>

    <?php echo "<p><b>Query String:</b>{$_SERVER['QUERY_STRING']} </p>"; ?>
    
    <?php
        parse_str( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_QUERY), $array );
        foreach ($array as $name => $value) {
                echo "$name: $value </br>";
        }
    ?>
 </body>
</html>
