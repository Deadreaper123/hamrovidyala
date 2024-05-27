<?php 
    session_start(); 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'admin@example.com' && $password == 'admin@123') {
            $_SESSION['login'] = true;
            header('location: ../index.php');
        }
        else {
            echo 'Invalid Email or Password';
        }
    }
?>
