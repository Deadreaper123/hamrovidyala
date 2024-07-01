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
    <title>View Teachers</title>
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
            <a href="dashboard.php" class="btn btn-success">Back to Dashboard</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2 class="text-center mb-4">View Teacher Details</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Birthdate</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Perform SQL query to fetch teacher data
                        $sql = "SELECT * FROM teacher_data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['first_name']}</td>";
                                echo "<td>{$row['last_name']}</td>";
                                echo "<td>{$row['gender']}</td>";
                                echo "<td>{$row['phone']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>{$row['birthdate']}</td>";
                                echo "<td>{$row['address']}</td>";
                                echo "<td>
                                        <a href='editteacher.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                        <a href='deleteteacher.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this teacher?\")'>Delete</a>
                                      </td>";
                                echo "</tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>No teachers found</td></tr>";
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
