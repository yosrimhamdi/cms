<?php 
function get_value ($input_name) {
  if(isset($_SESSION[$input_name . '_value'])) {
    return $_SESSION[$input_name. '_value'];
  }

  return '';
}
?>