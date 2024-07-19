<?php
require_once '../Backend/db.php';
require_once 'backend/post/display.php';
session_start();

$data = fetch_data();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
        .btn a {
            color: white;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-menu"></i>
                </button>
                <div class="sidebar-logo">
                    <a href='dashboard.php'>Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-var">
                <li class="sidebar-item">
                    <a href="dashboard.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="post.php" class="sidebar-link">
                        <i class="lni lni-postcard"></i>
                        <span>Post</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-footer">
                    <a href="backend/logout.php" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </li>
                </li>
            </ul>
        </aside>
        <div class="main p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h1>Post</h1>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary"><a href="backend/post/insert.php">Add</a></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="mt-3 table table-bordered border-black text-center">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Class</th>
                                <th>Student</th>
                                <th colspan="2">Action</th>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($data)) {
                                ?> <td><?php echo $row['Date'] ?></td>
                                    <td><?php echo $row['Title'] ?></td>
                                    <td><?php echo $row['Class'] ?></td>
                                    <td><?php echo $row['Student'] ?></td>
                                    <td><button class="btn btn-primary"><a href="backend/post/update.php?id=<?php echo $row['job_id'] ?>">
                                                Edit</a></button>
                                    </td>
                                    <td><button class="btn btn-danger"><a href="backend/post/delete.php?id=<?php echo $row['job_id'] ?>">
                                                Delete</a></button>
                                    </td>
                            </tr>
                        <?php
                                }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>