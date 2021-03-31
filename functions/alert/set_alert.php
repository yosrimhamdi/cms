<?php 
function set_alert($status, $message) {
  $_SESSION['status'] = $status;
  $_SESSION['message'] = $message;
}