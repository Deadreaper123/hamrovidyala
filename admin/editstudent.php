<?php
session_start();
include('config.php');

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $photo = $_FILES['photo']['name'];
    
    // File upload path
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . basename($photo);
    
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)){
        $sql = "UPDATE student_data SET 
                First_Name='$first_name', 
                Last_Name='$last_name', 
                Father_Name='$father_name', 
                Mother_Name='$mother_name', 
                Class='$class', 
                Address='$address', 
                Date_of_Birth='$date_of_birth', 
                Gender='$gender', 
                Email='$email', 
                Phone_Number='$phone_number', 
                Photo='$photo' 
                WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
            header('Location: viewstudents.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student_data WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Edit Student - Shree Academy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>

<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="editstudent.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $student['First_Name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $student['Last_Name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="father_name" class="form-label">Father's Name</label>
            <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $student['Father_Name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="mother_name" class="form-label">Mother's Name</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $student['Mother_Name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="<?php echo $student['Class']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $student['Address']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $student['Date_of_Birth']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="Male" <?php if($student['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($student['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if($student['Gender'] == 'Other') echo 'selected'; ?>>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $student['Email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $student['Phone_Number']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
