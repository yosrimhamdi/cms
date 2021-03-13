<?php
function validate_email() {
  $email = $_POST['email'];

  if (!str_contains($email, '@')) {
    $_SESSION['email'] = 'invalid email';
  }
}
