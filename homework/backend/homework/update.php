<?php
require '../db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="post.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

</head>


<body>
    <?php

    // To get id


    $id = $_GET['id'];


    $query = "select * from jobs where job_id='$id' ";
    $result = mysqli_query($conn, $query);


    if (!$result) {
        die("Error");
    } else {
        $row = mysqli_fetch_assoc($result);
    }

    ?>
    <div class="container">
        <form method="post" action="#?id=<?php echo $row['job_id'] ?>">
            <button class="btn-close ">
                <a href="../../post.php">X</a>
            </button>
            <label>Job Title</label>
            <input type="text" name="upjobtitle" placeholder="Enter the title of our job" class="form-control" value="<?php echo $row['job_title'] ?>" required>
            <label>Company</label>
            <select name="upcompany" value="<?php echo $row['company'] ?>" required>
                <?php
                $company = "SELECT * FROM company";
                $sql = mysqli_query($conn, $company);
                while ($option = mysqli_fetch_array($sql)) { ?>
                    <option>
                        <?php echo $option['company_name'] ?></option>
                <?php
                }
                ?>
            </select>
            <label>Location</label>
            <input type="text" name="uplocation" placeholder="Enter the job location" class="form-control" value="<?php echo $row['location'] ?>" required>
            <label>Posted by</label>
            <input type="text" name="upuser" placeholder="posted by" class="form-control" value="<?php echo $row['posted_by'] ?>" required>
            <label>Salary</label>
            <input type="number" name=upminsal placeholder="Minimum" class="form-control" value="<?php echo $row['min_salary'] ?>" required>
            <input type="number" name="upmaxsal" placeholder="Maximum" class="form-control" value="<?php echo $row['max_salary'] ?>" required>
            <label>Experience</label>
            <input type="number" name="upexp" placeholder="Experience level" class="form-control" value="<?php echo $row['experience_level'] ?>" required>
            <label>Categoreis</label>
            <select name="upcategory" value="<?php echo $row['category'] ?>" required>
                <?php
                $category = "SELECT * FROM category";
                $sqli = mysqli_query($conn, $category);
                while ($option = mysqli_fetch_array($sqli)) { ?>
                    <option>
                        <?php echo $option['category_name'] ?></option>
                <?php
                }
                ?>
            </select>
            <label>Deadline</label>
            <input type="date" name="updeadline" placeholder="Select Deadline" value="<?php echo $row['deadline'] ?>" value="<?php echo $row['deadline'] ?>" required>
            <label>Job Description</label>
            <input type="textbox" name="updescription" placeholder="Enter the job description" class="form-control" value="<?php echo $row['job_description'] ?>" required><br>
            <button type="submit" name="update">Update</button><br>
        </form>


</body>

</html>

<?php
if (isset($_POST['update'])) {
    $jobtitle = $_POST['upjobtitle'];
    $company = $_POST['upcompany'];
    $location = $_POST['uplocation'];
    $user = $_POST['upuser'];
    $minsal = $_POST['upminsal'];
    $maxsal = $_POST['upmaxsal'];
    $exp = $_POST['upexp'];
    $category = $_POST['upcategory'];
    $deadline = $_POST['updeadline'];
    $description = $_POST['updescription'];

    $sql = "UPDATE jobs set job_title='$jobtitle', company_id='$company',location='$location',posted_by='$user',experience_level='$exp',min_salary='$minsal',max_salary='$maxsal',deadline='$deadline',category='$category'
    where job_id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: ../../post.php');
        exit;
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
    }
}
