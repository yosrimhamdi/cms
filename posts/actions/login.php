<?php include '../../db/execute.php' ?>
<?php include '../../functions/redirect.php' ?>
<?php include '../../validators/is_email.php' ?>
<?php include '../../validators/is_not_empty.php' ?>
<?php include '../../functions/set_value_or_err.php' ?>

<?php session_start();

$email = $_POST['email'];
$password = $_POST['password'];

echo $email . '<br>';
echo $password . '<br>';

$v1 = set_value_or_err('email', $email, 'is_email', 'invalid email');
$v2 = set_value_or_err('password', $password, 'is_not_empty', 'empty password');

if ($v1 && $v2) {
  $query  = "SELECT * ";
  $query .= "FROM users ";
  $query .= "WHERE email = '$email'";
  
  $user = execute($query);
  $user = mysqli_fetch_assoc($user);

  echo $user['password'];
}

redirect('/posts');