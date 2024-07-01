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
    $stmt = $conn->prepare("DELETE FROM teacher_data WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Teacher record deleted successfully.";
        header('Location: viewteacher.php');
    } else {
        $_SESSION['error_message'] = "Error deleting record: " . $stmt->error;
        header('Location: viewteacher.php');
    }

    // Close the statement
    $stmt->close();
} else {
    $_SESSION['error_message'] = "Invalid request: Teacher ID not specified.";
    header('Location: viewteacher.php');
}
?>
