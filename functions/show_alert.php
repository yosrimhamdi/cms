<?php
function show_alert() {
  if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    $message = $_SESSION['message'];

    echo "<div class='alert alert-$status'>$message.</div>";
    echo "<script src='/static/js/remove_alert.js'></script>";
  } 
}