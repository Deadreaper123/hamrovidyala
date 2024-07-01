<?php
session_start();
include('config.php');

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

// Initialize variables
$id = '';
$student = [
    'ID' => '',
    'First_Name' => '',
    'Last_Name' => '',
    'Father_Name' => '',
    'Mother_Name' => '',
    'Class' => '',
    'Address' => '',
    'Date_of_Birth' => '',
    'Gender' => '',
    'Email' => '',
    'Phone_Number' => ''
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];  // Corrected name to match hidden input field name
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
            Phone_Number='$phone_number'
            WHERE ID='$id'";

    if (mysqli_query($conn, $sql)) {
        header('Location: viewstudent.php');
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM student_data WHERE ID='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $student = mysqli_fetch_assoc($result);
        } else {
            echo "No student found with the given ID.";
        }
    } else {
        echo "No ID provided.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Edit Student - hamrovidyalaya</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>

<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="editstudent.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['ID']); ?>">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($student['First_Name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($student['Last_Name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="father_name" class="form-label">Father's Name</label>
            <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo htmlspecialchars($student['Father_Name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="mother_name" class="form-label">Mother's Name</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo htmlspecialchars($student['Mother_Name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="<?php echo htmlspecialchars($student['Class']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($student['Address']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo htmlspecialchars($student['Date_of_Birth']); ?>" required>
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
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($student['Email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars($student['Phone_Number']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
