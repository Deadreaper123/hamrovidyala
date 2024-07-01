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

    // Prepare the statement
    $stmt = $conn->prepare("DELETE FROM student_data WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: viewstudent.php');
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
