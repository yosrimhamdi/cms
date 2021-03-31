<?php include_once '../../functions/redirect/redirect.php' ?>

<?php
function login_user($user) {
  $jwt  = "firstname=$user[firstname],lastname=$user[lastname],";
  $jwt .= "role=$user[role],";
  $jwt .= "image=$user[image]";

  setcookie('jwt', $jwt, time() + 3600 * 24 * 2);

  redirect('/');
}
