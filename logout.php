<?php 
    session_start();
    session_destroy();

    // header('location: ../main.php')
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>
