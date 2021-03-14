<?php 
function show_value_if_any($input_name) {
  if(isset($_SESSION[$input_name . '_value'])) {
    echo $_SESSION[$input_name. '_value'];
  }
}
?>