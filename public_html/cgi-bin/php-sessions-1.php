<?php 

        if(!isset($_COOKIE["username"])) {
            setcookie("username", $_POST["username"], time() + (86400 * 30));
            $_COOKIE["username"] = $_POST["username"];
        }

        // user enters username from html file -> $POST[username] is not empty -> setcookie with POST[username]
        // go to session 1
        // go to session 2
        // destroy session set cookie to ""
        // if you go to session 1, cookie is empty
?>

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
        if(!isset($_COOKIE["username"])) {
            echo "<p><b>Name:</b> You do not have a name set</p>";
        } else {
            echo "<p><b>Name: </b>" . $_COOKIE["username"];
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