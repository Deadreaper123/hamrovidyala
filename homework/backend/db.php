<?php

$db = "localhost";
$user = "root";
$pass = "";
$name = "levelup";

$conn = mysqli_connect($db, $user, $pass, $name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
