<?php
function clear_input_values() {
  foreach ($_SESSION as $key => $value) {
    if (str_contains($key, '_value')) {
      unset($_SESSION[$key]);
    }
  }
}