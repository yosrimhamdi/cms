<?php 
function set_alert_message($status, $message) {
  $_SESSION['status'] = $status;
  $_SESSION['message'] = $message;
}
?>