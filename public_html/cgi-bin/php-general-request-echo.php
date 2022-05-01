<?php require "analyticstracking.php"; ?>
<html>
 <head>
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
