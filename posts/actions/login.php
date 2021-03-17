<?php include '../../db/execute.php' ?>
<?php include '../../functions/redirect.php' ?>
<?php include '../../validators/is_email.php' ?>
<?php include '../../validators/is_not_empty.php' ?>
<?php include '../../functions/set_value_or_err.php' ?>
<?php include '../../functions/set_alert_message.php' ?>
<?php include '../../functions/sanitize.php' ?>
<?php include '../functions/compare.php' ?>

<?php session_start(); sanitize();

$email = $_POST['email'];
$password = $_POST['password'];

$v1 = set_value_or_err('email', $email, 'is_email', 'invalid email');
$v2 = set_value_or_err('password', $password, 'is_not_empty', 'empty password');

if ($v1 && $v2) {
  $query  = "SELECT * ";
  $query .= "FROM users ";
  $query .= "WHERE email = '$email'";
  
  $result = execute($query);
  $user = mysqli_fetch_assoc($result);
  $email_exists = mysqli_num_rows($result) ;

  if ($email_exists && compare($password, $user['password'])) {
    session_unset();
    set_alert_message('success', 'logged in.');
  } else {
    $_SESSION['email_error'] = 'wrong email or password';
    $_SESSION['password_error'] = 'wrong email or password';
  }
}

redirect('/posts');