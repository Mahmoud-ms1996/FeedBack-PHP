<?php
/* 
    - There's many ways to Connecting To MySQL 
    the way i connected to database is (POD) PHP Data Objects 
*/
    define('DB_HOST', 'localhost');
    define('DB_USER', 'mms');
    define('DB_PASS', '123');
    define('DB_NAME', 'feedback_db');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn -> connect_error){
        die('Connection Failed' . $conn -> connect_error);
    }
