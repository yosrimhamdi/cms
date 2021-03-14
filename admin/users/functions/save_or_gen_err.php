<?php
function save_or_gen_err($input_name, $input_value, $validator, $error_message) {
    $is_valid_input = $validator($input_value);

    if($is_valid_input) {
      $_SESSION[$input_name . '_value'] = $input_value;
    } else {
      $_SESSION[$input_name . '_error'] = $error_message;
    }
    
    return $is_valid_input;
}
?>