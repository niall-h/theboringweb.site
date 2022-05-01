<?php require "analyticstracking.php"; ?>
<?php  
    session_start(); 
    $_SESSION["username"] = $_POST['username']
?>

<!DOCTYPE html>
 <head>
  <title>PHP Sessions</title>
 </head>
 <body>
    <?php 
        header("Cache-Control: no-cache");
        header("Content-type: text/html");
    ?>

    <?php
        echo "<h1 align='center'>PHP Sessions Page 1</h1>";
        echo "<hr>";
    ?>

    <?php 
        if(!isset($_SESSION[$cookie_name]) || empty($_SESSION['username'])) {
            echo "<p><b>Name:</b> You do not have a name set</p>";
        } else {
            echo "<p><b>Name: </b>" . $_SESSION["username"];
        }

    ?>
    
    <br/><br/>
    <a href="/cgi-bin/php-sessions-2.php">Session Page 2</a><br/>
    <a href="/cgi-form/php-cgiform.html">PHP CGI Form</a><br />
    <form style="margin-top:30px" action="/cgi-bin/php-destroy-session.php" method="get">
        <button type="submit">Destroy Session</button>
    </form>

    </body>
    </html>
 </body>
</html>
