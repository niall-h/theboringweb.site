<?php require "analyticstracking.php"; ?>
<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
   <?php include_once("analyticstracking.php") ?>
    <?php echo '<h1>Hello, PHP!</h1>'; ?> 
    <?php echo "<p>This page was generated with the PHP programming language</p>" ?>
    <p><?php echo 'Current Time: ' . date("l Y:m:d h:i:sa") ?></p>
    <p><?php echo 'Your IP Address: '. $_SERVER['REMOTE_ADDR'] ?></p>
 </body>
</html>
