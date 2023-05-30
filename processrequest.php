<?php
session_start();

// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve GET parameters
    $username = isset($_GET["username"]) ? $_GET["username"] : "";
    $age = isset($_GET["age"]) ? $_GET["age"] : "";

    // Store parameters in session variables
    $_SESSION["username"] = $username;
    $_SESSION["age"] = $age;

    // Redirect back to the page with GET parameters
    header("Location: your_page.php?username=$username&age=$age");
    exit();
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve POST parameters
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";

    // Store parameters in session variables
    $_SESSION["username"] = $username;
    $_SESSION["age"] = $age;

    // Redirect back to the page
    header("Location: your_page.php");
    exit();
}
//Explention On how it works:
/*You can store user-specific data for usage across multiple pages or requests by using PHP sessions. When a session is started using the session_start() function, PHP allocates a unique session ID to the user's session and stores it as a cookie on the client-side, or appends it to URLs if cookies are not allowed.

When a user makes additional requests to the server, PHP uses the session ID to find and retrieve the relevant session data. Because of this, PHP programs can differentiate between different user sessions and get the pertinent session variables.
