<?php
function show_class($input_name) {
  if (isset($_SESSION[$input_name])) {
    echo "form-control is-invalid";
  } else {
    echo "form-control";
  }
}
