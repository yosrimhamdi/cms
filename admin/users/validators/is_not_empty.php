<?php 
function is_not_empty($input_name) {
  return !empty($_POST[$input_name]);
}
?>