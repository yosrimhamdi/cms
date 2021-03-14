<?php
function show_error_if_any($input_name) {
  $err_name = $input_name . '_error';

  if (isset($_SESSION[$err_name])) {
    echo "<p class='error-message'> $_SESSION[$err_name]</p>";
  }
}
