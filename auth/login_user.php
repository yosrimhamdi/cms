<?php include '../../functions/set_alert_message.php' ?>

<?php
function login_user($user) {
  $_SESSION['firstname'] = $user['firstname'];
  $_SESSION['lastname'] = $user['lastname'];
  $_SESSION['role'] = $user['role'];

  set_alert_message('success', 'logged in.');
}
