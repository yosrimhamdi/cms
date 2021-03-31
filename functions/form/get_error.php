<?php
function get_error ($input_name) {
  $err_name = $input_name . '_error';

  if (isset($_SESSION[$err_name])) {
    return $_SESSION[$err_name];
  }

  return '';
}
