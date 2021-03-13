<?php
function show_error($input_name) {
  if (isset($_SESSION[$input_name])) {
    echo "<p style='color:red;'>$_SESSION[$input_name]</p>";
  }
}
