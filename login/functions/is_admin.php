<?php
function is_admin() {
  $jwt = $_COOKIE['jwt'];

  return str_contains($jwt, 'role=admin');
}