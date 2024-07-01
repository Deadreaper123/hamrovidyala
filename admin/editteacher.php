<?php
session_start();
include('config.php');

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

// Initialize variables
$teacher = [
    'id' => '',
    'first_name' => '',
    'last_name' => '',
    'gender' => '',
    'phone' => '',
    'email' => '',
    'birthdate' => '',
    'address' => ''
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];

    // Prepare the SQL update statement
    $stmt = $conn->prepare("UPDATE teacher_data SET 
                            first_name=?, 
                            last_name=?, 
                            gender=?, 
                            phone=?, 
                            email=?, 
                            birthdate=?, 
                            address=? 
                            WHERE id=?");
    $stmt->bind_param("sssssssi", $first_name, $last_name, $gender, $phone, $email, $birthdate, $address, $id);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Teacher details updated successfully.";
        header('Location: viewteacher.php');
        exit();
    } else {
        $_SESSION['error_message'] = "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If ID is provided via GET, fetch teacher details
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare SQL select statement
        $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, phone, email, birthdate, address FROM teacher_data WHERE id=?");
        $stmt->bind_param("i", $id);

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($teacher['id'], $teacher['first_name'], $teacher['last_name'], $teacher['gender'], $teacher['phone'], $teacher['email'], $teacher['birthdate'], $teacher['address']);

        // Fetch the result
        $stmt->fetch();

        // Close the statement
        $stmt->close();
    } else {
        $_SESSION['error_message'] = "No teacher ID provided.";
        header('Location: viewteacher.php');
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Teacher - hamrovidyalaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Teacher</h2>
    <form action="editteacher.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($teacher['id']); ?>">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($teacher['first_name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($teacher['last_name']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="Male" <?php if($teacher['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($teacher['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if($teacher['gender'] == 'Other') echo 'selected'; ?>>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($teacher['phone']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($teacher['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($teacher['birthdate']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($teacher['address']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>
</html>
