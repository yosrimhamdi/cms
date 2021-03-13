<?php include_once '../functions/send_error.php' ?>

<?php
function validate_password() {
  $password = $_POST['password'];

  if (strlen($password) < 8) {
    send_error("password length must be > than 8 chars");
  }
}
