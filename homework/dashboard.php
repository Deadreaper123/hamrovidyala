<?php
require 'backend/db.php';
session_start();

$query = "SELECT * FROM application where company_name = '$_SESSION[name]'; ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-menu"></i>
                </button>
                <div class="sidebar-logo">
                    <a href='admin.php'>Dashboard</a>
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
                        <span>Homework</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-alarm"></i>
                        <span>Sumbittion</span>
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
            <h1>Profile</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2>Welcome</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="mt-3 table table-bordered border-black text-center">
                            <tr>
                                <th>Date</th>
                                <th>Homework Title</th>
                                <th>Name</th>
                                <th>Submition</th>
                                <th>Dadline</th>
                                

                                <th colspan="2">Action</th>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?> <td><?php echo $row['Date'] ?></td>
                                <td><?php echo $row['Homework_Title'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Submition'] ?></td>
                                <td><?php echo $row['Deadline'] ?></td>
                                <td><a href="backend/applicant/view.php?aid=<?php echo $row['Application_id'] ?>"><button
                                            class="btn btn-primary">
                                            View</button></a>
                                </td>
                                <td><a href="backend/applicant/delete.php?aid=<?php echo $row['Application_id'] ?>""><button class="
                                        btn btn-danger">
                                        Delete</button></a>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="js/script.js"></script>
</body>

</html>