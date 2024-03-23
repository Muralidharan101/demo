<?php
    session_start();
    if(!isset($_SESSION['check'])) {
        header('Location: login.php');
    } else {
        $id = $_SESSION['id'];
        $brand_name = $_SESSION['name'];
    }
?>