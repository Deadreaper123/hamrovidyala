<?php
session_start();
include('config.php'); // Adjust path based on your directory structure

// Verify database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}






// Handle adding a new teacher
if (isset($_POST['add_teacher'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $real_password = $_POST['real_password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO teacher (username, password, real_password) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
    $stmt->bind_param("sss", $username, $hashed_password, $real_password);

    if ($stmt->execute()) {
        header("Location: manage_teachers.php?success=Teacher added successfully");
        exit();
    } else {
        header("Location: manage_teachers.php?error=Error adding teacher");
        exit();
    }
}

// Handle removing a teacher
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['username'])) {
    $username = $_GET['username'];

    $stmt = $conn->prepare("DELETE FROM teacher WHERE username = ?");
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        header("Location: manage_teachers.php?success=Teacher removed successfully");
        exit();
    } else {
        header("Location: manage_teachers.php?error=Error removing teacher");
        exit();
    }
}

// Fetch existing teachers from database
$stmt = $conn->prepare("SELECT username, real_password FROM teacher");
if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- HTML content starts -->

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Manage Teachers</h2>

            <?php if (isset($_GET['success'])) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo htmlspecialchars($_GET['success']); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif (isset($_GET['error'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="card mb-4">
                <h5 class="card-header">Add New Teacher</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="real_password">Real Password</label>
                            <input type="password" class="form-control" id="real_password" name="real_password" required><br><br>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add_teacher">Add Teacher</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">Existing Teachers</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Real Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                                        <td><?php echo htmlspecialchars($row['real_password']); ?></td>
                                        <td>
                                            <a href="index.php?action=remove&username=<?php echo urlencode($row['username']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Remove</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
