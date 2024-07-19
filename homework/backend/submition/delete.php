<?php
require_once '../db.php';

if (isset($_GET['aid'])) {
    $id = $_GET['aid'];
    $delete = "DELETE FROM application WHERE Application_id='$id'";
    $result = mysqli_query($conn, $delete);

    if (!$result) {
        die("error");
    } else {
        header("Location:../../dashboard.php");
    }
} else {
    die("id not found");
}
