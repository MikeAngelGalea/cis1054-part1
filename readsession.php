<?php
session_start();

// Read session variables
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
$age = isset($_SESSION["age"]) ? $_SESSION["age"] : "";

// Echo session variables
echo "Username: $username<br>";
echo "Age: $age";
?>