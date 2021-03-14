<?php include_once '../../../db/execute.php' ?>

<?php
function is_new_email($email) {
  $query  = "SELECT * FROM users ";
  $query .= "WHERE email = '$email'";

  $user = execute($query);

  return mysqli_num_rows($user) === 0;
}
?>