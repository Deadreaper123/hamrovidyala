<?php
include '../backend/db.php';

function fetch_data()
{
    global $conn;
    $query = "SELECT * FROM homework where Student = '$_SESSION[name]'";
    $result = mysqli_query($conn, $query);
    return $result;
}