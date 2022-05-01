<?php require "analyticstracking.php"; ?>
<!DOCTYPE html>
 <head>
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
