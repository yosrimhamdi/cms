<?php
function is_logged_in() {
  return isset($_COOKIE['jwt']);
}