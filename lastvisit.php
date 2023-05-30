<?php
session_Start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Session</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php 
        if (!isset($_SESSION['first_visit'])) {
            $_SESSION['first_visit'] = time();
            echo "Welcome to our page!";
          } else {
            $last_visit = $_SESSION['first_visit'];
            $seconds_since = time() - $last_visit;
            echo "You first used this page $seconds_since seconds ago.";
          }
        ?>



        <script src="" async defer></script>
    </body>
</html>