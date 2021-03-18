<?php include_once '../../functions/redirect.php' ?>

<?php
function login_user($user) {
  $_SESSION['firstname'] = $user['firstname'];
  $_SESSION['lastname'] = $user['lastname'];
  $_SESSION['role'] = $user['role'];

  redirect('/');
}
