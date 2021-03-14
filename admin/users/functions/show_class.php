<?php
function show_class($input_name) {
  if (isset($_SESSION[$input_name . '_error'])) {
    echo "form-control is-invalid";
  } else {
    echo "form-control";
  }
}
