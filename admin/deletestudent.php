<?php
session_start();
include('config.php');

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM student_data WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: viewstudents.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
