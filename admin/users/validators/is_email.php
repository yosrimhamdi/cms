<?php
function is_email($input) {
  $email = $_POST[$input];

  $find1 = strpos($email, '@');
  $find2 = strpos($email, '.');

  return ($find1 !== false && $find2 !== false && $find2 > $find1);
}
?>