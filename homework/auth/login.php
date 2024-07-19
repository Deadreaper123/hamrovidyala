<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    .close {
        display: flex;
    }

    .close a {
        text-decoration: none;
    }

    .close h1 {
        padding: 0px 100px;
    }
    </style>
</head>

<body>
    <div class="container">
        <form class="mainForm" method="post" action="login.php">
            <div class="close">
                <a href="../../index.php">x</a>
                <h1>login</h1>
            </div>
            <label>Email</label>
            <input type="text" name="email" class="form-control" required>
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            <p>Don't have an account? <a href="register.php">Register</a></p>
            <button type="submit" class="btn btn-primary" name="submit">login</button>
        </form>
    </div>


</body>


</html>

<?php

require_once '../../Backend/db.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM company WHERE email='$email' AND password='$password'";

    $data = $conn->query($sql);
    if ($data->num_rows > 0) {
        $user = $data->fetch_assoc();
        $_SESSION['id'] = $user['company_id'];
        $_SESSION['name'] = $user['company_name'];
        $_SESSION['password'] = $user['password'];
        header('location: ../dashboard.php');
        $_SESSION['loggedin'] = true;
    } else {
        $_SESSION['loggedin'] = false;
        echo ('<script>alert("Wrong Credentials")</script>');
        // header('location: login.php');
    }
}