<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

include('header.php');

// Connect to the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'hamrovidyalaya');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];

        $query = "INSERT INTO teacher_data (first_name, last_name, gender, phone, email, birthdate, address) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        if ($stmt) {
            $stmt->bind_param("sssssss", $first_name, $last_name, $gender, $phone, $email, $birthdate, $address);
            if ($stmt->execute()) {
                $_SESSION['success_message'] = "Teacher details added successfully.";
                header('Location: viewteacher.php');
                exit();
            } else {
                $_SESSION['error_message'] = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error_message'] = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add Teachers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(45deg, #ce1e53, #8f00c7);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .form-wrapper {
            max-width: 600px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
        }
        .form-wrapper form {
            margin-top: 30px;
        }
        .form-wrapper h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-wrapper label {
            font-weight: bold;
        }
        .form-wrapper .form-control {
            margin-bottom: 15px;
        }
        .form-wrapper .gender-options {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .form-wrapper .gender-options label {
            margin-right: 10px;
        }
        .form-wrapper .submit-btn {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="dashboard.php" class="btn btn-success">Back to Dashboard</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="form-wrapper">
                <h2>Add New Teacher</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <div class="gender-options">
                                <label>
                                    <input type="radio" name="gender" value="male" required> Male
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="female" required> Female
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="submit-btn">
                        <button type="submit" name="submit" class="btn btn-primary">Add Teacher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-nzKWUHhpwpfS6OrMH2RvUGKaxj4vjJb0Xu7kTeS/mnMew7iZlKaIsk67P+81KnV3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-aSv8kAUKoLcg/xO5z1zhoG8UR/2F7pEHFzYz4h9vOoG+5CC5tp8Kvr5Ce9RVNLhq" crossorigin="anonymous"></script>

</body>
</html>

<?php include('footer.php'); ?>
