<?php
session_start();
include('config.php');

if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}
include('header.php');

// Handle form submission to add new student
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Fetch form data
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_FILES['image']['name'];
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . basename($image);
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the image file is selected
    if (!empty($image)) {
        // Allow certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Insert student details into the database
                $query = "INSERT INTO `student_data` (`First_Name`, `Last_Name`, `Father_Name`, `Mother_Name`, `Class`, `Address`, `Date_of_Birth`, `Gender`, `Email`, `Phone_Number`, `Image_Path`) VALUES ('$name', '$lastname', '$fname', '$mname', '$class', '$address', '$dob', '$gender', '$email', '$phone', '$targetFilePath');";
                
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $_SESSION['success_message'] = "Student details added successfully.";
                    //....................//
                    header("Location: studentsmanagement.php");
                    exit();
                } else {
                    $_SESSION['error_message'] = "Error: " . $query . "<br>" . mysqli_error($conn);
                }
            } else {
                $_SESSION['error_message'] = "Sorry, there was an error uploading your file.";
            }
        } else {
            $_SESSION['error_message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        $_SESSION['error_message'] = "Please select an image file to upload.";
    }
}

// Perform SQL query to fetch student data for display
$sql = "SELECT * FROM student_data";
$result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom styles for form */
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
    <div class="row mt-5">
        <div class="col">
            <div class="form-wrapper">
                <h2>Add New Student</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="fname" class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mname" class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="mname" name="mname" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" class="form-control" id="class" name="class" required>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
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
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="image" name="image" aria-describedby="fileHelpId">
                    </div>
                    <div class="submit-btn">
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-nzKWUHhpwpfS6OrMH2RvUGKaxj4vjJb0Xu7kTeS/mnMew7iZlKaIsk67P+81KnV3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-aSv8kAUKoLcg/xO5z1zhoG8UR/2F7pEHFzYz4h9vOoG+5CC5tp8Kvr5Ce9RVNLhq" crossorigin="anonymous"></script>

</body>
</html>

<?php include('footer.php'); ?>
