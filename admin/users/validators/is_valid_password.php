<?php
function is_valid_password($password) {
  return strlen($password) >= 8;
}
?>