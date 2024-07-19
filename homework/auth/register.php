<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form class="mainForm" method="post" action="#">
            <h1 class=title>Register</h1>
            <label>Company Name</label>
            <input type="text" name="cname" class="form-control" required><br>
            <label>Email</label>
            <input type="email" name="email" class="form-control" required><br>
            <label>Password</label>
            <input type="password" name="password" class="form-control" required><br>
            <label>Website</label>
            <input type="text" name="website" class="form-control" required><br>
            <label>Description</label>
            <input type="textarea" name="description" class="form-control" required><br>
            <p>Already have an account? <a href="login.php">login</a></p>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </form>
    </div>


</body>



</html>

<?php

require_once "../../Backend/db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['cname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $website = $_POST['website'];
    $description = $_POST['description'];




    $sql = "INSERT INTO company (company_name,website,company_description,email,password) VALUES ('$name','$website','$description','$email','$pass')";
    if (mysqli_query($conn, $sql)) {
        header('location: login.php');
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
    }
}