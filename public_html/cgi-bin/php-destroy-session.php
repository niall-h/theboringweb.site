<?php 
    session_start();
    // remove all session variables
    session_unset(); 
    // destroy the session 
    session_destroy(); 
?>

<?php require "analyticstracking.php"; ?>
<!DOCTYPE html>
 <head>
    <title>PHP Sessions Destroyed</title>
 </head>
 <body>
    <?php 
        header("Cache-Control: no-cache");
        header("Content-type: text/html");
        // setcookie('username', '', time() - 3400); // empty value and old timestamp
    ?>

   
    <h1>Destroyed</h1>
    <a href="/cgi-form/php-cgiform.html">Back to the Perl CGI Form</a><br />
    <a href="/cgi-bin/php-sessions-1.php">Back to Page 1</a><br />
    <a href="/cgi-bin/php-sessions-2.php">Back to Page 2</a>
 </body>
</html>
