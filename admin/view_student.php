<?php
session_start();
include('config.php'); // Ensure this file has your database connection details

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}

// Include header
include('header.php');
?>

<!doctype html>
<html lang="en">
<head>
    <title>View Students - Shree Academy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="studentsmanagement.php" class="btn btn-success">Back to Dashboard</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2 class="text-center mb-4">View Student Details</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Perform SQL query to fetch student data
                        $sql = "SELECT * FROM student_data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$count}</td>";
                                echo "<td>{$row['First_Name']}</td>";
                                echo "<td>{$row['Last_Name']}</td>";
                                echo "<td>{$row['Father_Name']}</td>";
                                echo "<td>{$row['Mother_Name']}</td>";
                                echo "<td>{$row['Class']}</td>";
                                echo "<td>{$row['Address']}</td>";
                                echo "<td>{$row['Date_of_Birth']}</td>";
                                echo "<td>{$row['Gender']}</td>";
                                echo "<td>{$row['Email']}</td>";
                                echo "<td>{$row['Phone_Number']}</td>";
                                echo "<td><img src='uploads/{$row['Photo']}' class='img-fluid' style='max-width: 100px;' alt='Student Photo'></td>";
                                echo "</tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='12' class='text-center'>No students found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php include('footer.php'); ?>
