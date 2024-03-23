<?php
    session_start();
    if(!isset($_SESSION['check3'])) {
        header('Location: login.php');
    } else {
        $agency_id = $_SESSION['agency_id'];
        $agency_name = $_SESSION['agency_name'];
    }
?>