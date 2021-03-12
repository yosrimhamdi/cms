<?php
function get_param() {
  $parts = explode('/', $_SERVER['REQUEST_URI']);

  return end($parts);
}
