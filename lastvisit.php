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

//Inside the PHP code block, the if statement checks if the session variable first_visit is not set. If it's not set, it means the user is visiting the page for the first time.

//If it's the first visit, the current timestamp is stored in the first_visit session variable using $_SESSION['first_visit'] = time();.

//A welcome message is echoed, indicating that it's the user's first visit to the page.

//If the first_visit session variable is set, it means the user has visited the page before. The value of first_visit is assigned to the variable $last_visit.

//The time difference between the current visit and the previous visit is calculated by subtracting $last_visit from the current timestamp using time() - $last_visit.

//A message is echoed, displaying the time difference in seconds since the last visit.
