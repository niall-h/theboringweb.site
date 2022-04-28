<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <?php
      $myObj->message = "Hello World!";
      $myObj->date = date("l Y:m:d h:i:sa");
      $myObj->currentIP = $_SERVER['REMOTE_ADDR'];

      $myJSON = json_encode($myObj);

      echo $myJSON;
   ?>
   
    
 </body>
</html>
