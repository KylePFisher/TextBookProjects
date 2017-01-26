<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "art";
    $dbport = 3306;

    // Create database connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check if database connection was created
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>    
    