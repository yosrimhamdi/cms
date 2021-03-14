<?php
function save_or_gen_err($input_name, $validator, $error_message) {
    if($validator($input_name)) {
      $_SESSION[$input_name . '_value'] = $_POST[$input_name];
    } else {
      $_SESSION[$input_name . '_error'] = $error_message;
    }
}
?>