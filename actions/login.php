<?php
session_start();
include('config.php'); 
$site_url = 'http://localhost/hamrovidyalaya'; 

if (isset($_POST['login'])) {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Determine the table based on the role
    $table = '';
    switch ($role) {
        case 'admin':
            $table = 'admin';
            break;
        case 'student':
            $table = 'student';
            break;
        case 'teacher':
            $table = 'teacher';
            break;
        default:
            header("Location: $site_url/accountrole.php");
            exit();
    }

    // Prepare SQL query
    $stmt = $conn->prepare("SELECT username, password FROM $table WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;

            // Redirect to appropriate dashboard
            switch ($role) {
                case 'admin':
                    header("Location: $site_url/admin/dashboard.php");
                    break;
                case 'student':
                    header("Location: $site_url/student");
                    break;
                case 'teacher':
                    header("Location: $site_url/teacher");
                    break;
            }
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: $site_url/accountrole.php");
    exit();
}
?>
