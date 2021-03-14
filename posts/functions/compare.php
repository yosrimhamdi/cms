<?php
function compare($password, $hash) {
  $salt = '$6$rounds=5000$thisisarandomstringoverheresodamnsecured$';
  
  return crypt($password, $salt) === $hash;
}
?>