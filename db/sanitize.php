<?php
function sanitize() {
  global $link;

  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysqli_real_escape_string($link, $value);
  }
}
?>