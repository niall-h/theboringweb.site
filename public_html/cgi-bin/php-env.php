<?php require "analyticstracking.php"; ?>
<html>
 <head>
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
