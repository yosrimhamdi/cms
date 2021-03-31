<?php 
function get_user() {
  $details = explode(',', $_COOKIE['jwt']);
  $user = [];

  foreach($details as $detail) {
    $t = explode('=', $detail);

    $user[$t[0]] = $t[1];
  }

  return $user;
}