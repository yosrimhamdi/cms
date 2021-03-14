<?php
function is_valid_password($input_name) {
  $password = $_POST[$input_name];

  return strlen($password) >= 8;
}
?>