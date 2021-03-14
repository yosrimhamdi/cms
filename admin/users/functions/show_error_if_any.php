<?php
function show_error_if_any($input_name) {
  if (isset($_SESSION[$input_name])) {
    echo "<p class='error-message'> $_SESSION[$input_name]</p>";
  }
}
