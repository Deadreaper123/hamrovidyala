<?php
require_once '../db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="post.css">
</head>

<body>
    <div class="container">
        <form method="post" action="#">
            <button class=btn-close>
                <a href="../../post.php">X</a>
            </button>
            <label>Date</label>
            <input type="date" name="date" placeholder="Enter the title of our job" class="form-control" required>
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter the job location" class="form-control" required>
            <label>Class</label>
            <input type="text" name="class" placeholder="posted by" class="form-control" required>
            
            <button type="submit" name="submit">Submit</button><br>
        </form>

</body>

</html>
<?php


require '../../../config.php';
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $title = $_POST['title'];
    $class = $_POST['class'];

    $sql = "INSERT INTO homework (date,title,class) VALUES 
        ('$date', '$title','$class')";
    if (mysqli_query($conn, $sql)) {
        header('location: ../../homework.php');
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
    }
}