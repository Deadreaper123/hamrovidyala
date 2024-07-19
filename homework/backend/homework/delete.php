<?php
require_once '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM jobs WHERE Id='$id'";
    $result = mysqli_query($conn, $delete);

    if (!$result) {
        die("error");
    } else {
        header("Location:../../post.php?msg=deleted sucessfully");
    }
} else {
    die("id not found");
}
