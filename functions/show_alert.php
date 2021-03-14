<?php include 'session_close.php' ?>

<?php
function show_alert() {
  session_start(); 

  if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    $message = $_SESSION['message'];

    echo "<div class='alert alert-$status'>$message.</div>";
    echo "<script src='/javascript/remove_alert.js'></script>";

    session_close();
  } 
}