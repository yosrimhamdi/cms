<?php
function validate_empty_inputs() {
  $inputs = ['firstname', 'lastname', 'password'];

  foreach ($inputs as $input) {
    if (empty($_POST[$input])) {
      $_SESSION[$input] = "$input can't be empty";
    }
  }
}
