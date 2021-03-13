<?php
function validate_password() {
  $password = $_POST['password'];

  if (strlen($password) < 8) {
    $_SESSION['password'] = 'invalid password must >= 8 chars';
  }
}
