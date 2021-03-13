<?php include_once '../functions/send_error.php' ?>

<?php
function validate_empty_inputs() {
  $inputs = ['firstname', 'lastname', 'password'];

  foreach ($inputs as $input) {
    if (empty($_POST[$input])) {
      send_error("empty $input not allowed");
    }
  }
}
