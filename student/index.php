<?php
include('../config.php'); // Ensure this file has your database connection details
include('header.php');
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

// Fetch the logged-in student's details
$username = $_SESSION['username'];
$sql = "SELECT * FROM student_data WHERE username='$username'";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    $student = mysqli_fetch_assoc($result);
} else {
    // Handle the case where no student was found
    $student = null;
}

// Include header
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Student Dashboard - hamrovidyalaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">

<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo htmlspecialchars($student['First_Name']); ?> "Student" </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: #20232a;" href="#">Student</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item"><a style="color: #2d958e;" id = "logout-confirm" onclick="conf()">Logout</a></li> <!-- Logout link -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col">
            <h2 class="text-center mb-4">Your Details</h2>
            <?php if ($student): ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td><?php echo htmlspecialchars($student['ID']); ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo htmlspecialchars($student['username']); ?></td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td><?php echo htmlspecialchars($student['First_Name']); ?></td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td><?php echo htmlspecialchars($student['Last_Name']); ?></td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td><?php echo htmlspecialchars($student['Father_Name']); ?></td>
                            </tr>
                            <tr>
                                <th>Mother's Name</th>
                                <td><?php echo htmlspecialchars($student['Mother_Name']); ?></td>
                            </tr>
                            <tr>
                                <th>Class</th>
                                <td><?php echo htmlspecialchars($student['Class']); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo htmlspecialchars($student['Address']); ?></td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td><?php echo htmlspecialchars($student['Date_of_Birth']); ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo htmlspecialchars($student['Gender']); ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo htmlspecialchars($student['Email']); ?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo htmlspecialchars($student['Phone_Number']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-warning text-center" role="alert">
                    No details found for the logged-in user. Please check your account details or contact support.
                </div>
                <div class="text-center mt-4">
                    <a href="../dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
                    <a href="../contact_support.php" class="btn btn-danger">Contact Support</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-nzKWUHhpwpfS6OrMH2RvUGKaxj4vjJb0Xu7kTeS/mnMew7iZlKaIsk67P+81KnV3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-aSv8kAUKoLcg/xO5z1zhoG8UR/2F7pEHFzYz4h9vOoG+5CC5tp8Kvr5Ce9RVNLhq" crossorigin="anonymous"></script>
<script>
    function conf() {
        var r = confirm("Are you sure you want to logout?");
        if (r == true) {
            window.location.href = "../logout.php";
        }
    }
</script>
</body>
</html>

<?php include('../footer.php'); ?>
