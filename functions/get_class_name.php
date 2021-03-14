<?php
function get_class_name($input_name) {
  if (isset($_SESSION[$input_name . '_error'])) {
    return 'form-control is-invalid';
  } 

  return 'form-control';
}
