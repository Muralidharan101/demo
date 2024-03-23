<?php
    session_start();
    session_destroy();

    header('Location: ../../../influencer/login.php');
?>