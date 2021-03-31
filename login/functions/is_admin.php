<?php
function is_admin() {
  $jwt = $_COOKIE['jwt'];

  return str_contains('role=admin', $jwt);
}