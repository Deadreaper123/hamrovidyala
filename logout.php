<?php 
    session_start();
    session_destroy();

    // header('location: ../main.php')
    header('Location: index.php');
    exit();
?>
