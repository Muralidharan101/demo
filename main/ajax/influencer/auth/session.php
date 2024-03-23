<?php
    session_start();
    if(!isset($_SESSION['inf_check'])) {
        header('Location: login.php');
    } else {
        $inf_id = $_SESSION['inf_id'];
        $inf_name = $_SESSION['inf_name'];
    }
?>