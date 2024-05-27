<?php

  $db_conn = mysqli_connect('localhost', 'root', 'root','hamrovidyala');

  if (!$db_conn) {
    echo 'Connection Failed';
    exit;
  }
  session_start();
  // if(empty($_SESSION) || !isset($_SESSION['login']))
  // {
  //   session_start();
  // }
  date_default_timezone_set('Asia/nepal');
  include('functions.php');
?>
