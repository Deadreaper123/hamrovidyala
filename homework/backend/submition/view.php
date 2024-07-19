<?php
require_once '../db.php';
session_start();

$id = $_SESSION['id'];
$aid = $_GET['aid'];

if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $update = "UPDATE application SET Status = '$status' WHERE Application_id = $aid;";
    $result = mysqli_query($conn, $update);
    if ($result) {
        echo "Status updated";
        header("Refresh: 2; URL=../../dashboard.php");
        exit; // Ensure no further output interferes
    } else {
        die("Error: " . mysqli_error($conn));
    }
}

$fetch = "SELECT * FROM application WHERE Application_id = $aid;";
$result = mysqli_query($conn, $fetch);

if ($result->num_rows < 1) {
?>
<a href="details.php?id=<?php echo $id ?>"><button class="btn btn-primary">Set a profile</button></a>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        padding: 0px;
        margin: 0px;
    }

    .cv {
        justify-content: center;
        text-align: center;
    }

    .btn {
        width: 100px;
        margin: 20px;
    }

    .card-body img {
        width: 600px;
        height: 800px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">Profile</h1>
                    <div class="card-body">
                        <!-- Profile details -->
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Job Title</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <p><?php echo $row['job_title'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <p><?php echo $row['name'] ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <?php echo $row['address'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Category</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <?php echo $row['category'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone No</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <?php echo $row['phone'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Age</h5>
                            </div>
                            <div class="col-md-9 text-seconday">
                                <?php echo $row['age'] ?>
                            </div>
                        </div>
                        <hr>

                        <!-- Form for status update -->
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Approval</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-6 mt-1">
                <div class="card mb-3 cv">
                    <div class="card-body">
                        <img src="../../../Frontend/image/<?php echo $row['cv'] ?>" alt="profile" class="cv">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>