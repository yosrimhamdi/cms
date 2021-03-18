<?php include_once '../../db/execute.php' ?>
<?php include_once '../../functions/redirect.php' ?>
<?php include_once '../../validators/is_email.php' ?>
<?php include_once '../../validators/is_not_empty.php' ?>
<?php include_once '../../functions/set_value_or_err.php' ?>
<?php include_once '../../functions/sanitize.php' ?>
<?php include_once '../functions/compare.php' ?>
<?php include_once '../../functions/redirect_if_not_legal.php' ?>
<?php include_once '../../functions/login_user.php' ?>

<?php redirect_if_not_legal('/login');

session_start(); session_unset();

sanitize();

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
  
  if ($user && compare($password, $user['password'])) {
    login_user($user);
  } else {
    $_SESSION['email_error'] = 'wrong email or password';
    $_SESSION['password_error'] = 'wrong email or password';
  }
} 

redirect('/login');
