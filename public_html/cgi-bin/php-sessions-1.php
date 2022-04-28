<?php
        $cookie_name = "username";
        if(!is_null($_POST['username']) || !isset($_COOKIE[$cookie_name])) {
            $username = $_POST['username']; 
            setcookie($cookie_name, $username, time() + (3000), "/");
            $_COOKIE[$cookie_name] = $username;
        }
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
        if(!isset($_COOKIE[$cookie_name])) {
            echo "<p><b>Name:</b> You do not have a name set</p>";
        } else {
            echo "<p><b>Name: </b>" . $_COOKIE[$cookie_name];
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
