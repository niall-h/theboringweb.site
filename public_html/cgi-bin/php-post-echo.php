<?php require "analyticstracking.php"; ?>
<html>
 <head>
    <title>PHP Test</title>
 </head>
 <body>
    <?php 
        header("Cache-Control: no-cache");
        header("Content-type: text/html");
    ?>

    <?php
        echo "<h1 align='center'>POST Request Echo</h1>";
        echo "<hr>";
    ?>

    <?php echo "<b>Message Body:</b><br/>"; ?>
    <?php 
        $queryBody = file_get_contents('php://input'); 
        parse_str($queryBody, $post_array);
        echo "<ul>";
        foreach ($post_array as $name => $value) {
            echo "<li>$name: $value </li>";
        }
        echo "</ul>";
    ?>
    
 </body>
</html>
