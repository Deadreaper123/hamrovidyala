<?php
$server='localhost';
$user='root';
$password='';
$db='user';

$conn = $mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("connection failed");
    echo"connected sucessfullly";
}
?>