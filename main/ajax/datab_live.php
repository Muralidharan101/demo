<?php
    $host = 'localhost';
    $user = 'media_admin';
    $pass = 'Dream@123';
    $db   = 'media_db';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        die('Connection Error:' .mysqli_connect_error());
    }

    if(function_exists('date_default_timezone_set')) {
        date_default_timezone_set('Asia/Kolkata');
    }

    $dateTime = date('Y-m-d H:i:s');
?>