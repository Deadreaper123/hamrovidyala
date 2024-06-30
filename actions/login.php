<?php
session_start();
include('config.php'); 
$site_url = 'http://localhost/hamrovidyalaya'; 
if (isset($_POST['login'])) {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query based on role
    if ($role === 'admin') {
        $stmt = $conn->prepare("SELECT username, password FROM admin WHERE username = ?");
    } elseif ($role === 'student') {
        $stmt = $conn->prepare("SELECT username, password FROM student WHERE username = ?");
    } elseif ($role === 'teacher') {
        $stmt = $conn->prepare("SELECT username, password FROM teacher WHERE username = ?");
    } else {
        // Invalid role, redirect to the login page
        header("Location: index.php");
        exit();
    }

    // Bind parameters and execute query
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['username'] = $username;

            // Redirect to appropriate dashboard
            if ($role === 'admin') {
                header("Location: $site_url/dashboard/admin"); 
            } elseif ($role === 'student') {
                header("Location: $site_url/dashboard/student");
            } elseif ($role === 'teacher') {
                header("Location: $site_url/dashboard/teacher");
            }
            exit();
        } else {
            // Incorrect password
            echo "Invalid username or password.";
        }
    } else {
        // User does not exist
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
} else {
    // If login form is not submitted, redirect to the login page
    header("Location: index.php");
    exit();
}
?>
