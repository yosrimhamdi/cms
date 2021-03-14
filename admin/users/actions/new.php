<?php include '../../../functions/redirect.php' ?>
<?php include '../../../db/execute.php' ?>
<?php include '../functions/set_value_or_err.php' ?>
<?php include '../functions/set_alert_message.php' ?>
<?php include '../validators/is_not_empty.php' ?>
<?php include '../validators/is_email.php' ?>
<?php include '../validators/is_valid_password.php' ?>
<?php include '../validators/is_new_email.php' ?>

<?php session_start(); session_unset();
$salt = '$6$rounds=5000$thisisarandomstringoverheresodamnsecured$';
$root = $_SERVER['DOCUMENT_ROOT'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$role = $_POST['role'];
$password = $_POST['password'];
$image = $_FILES['image'];

$v1 = set_value_or_err('firstname', $firstname, 'is_not_empty', 'empty firstname not allowed');
$v2 = set_value_or_err('lastname', $lastname, 'is_not_empty', 'empty firstname not allowed');
$v3 = set_value_or_err('password', $password, 'is_valid_password', 'password must be 8+ chars');
$v4 = set_value_or_err('email', $email, 'is_email', 'invalid email');

if ($v4) {
  $v4 = set_value_or_err('email', $email, 'is_new_email', 'already exists');
}


if ($v1 && $v2 && $v3 && $v4) {
  $password = crypt($password, $salt);

  if ($image['error']) {
    $image_file_name = 'default.png';
  } else {
    $image_file_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];

    move_uploaded_file($image_tmp_name, $root . "/static/images/users/$image_file_name");
  }

  $query  = "INSERT INTO users (firstname, lastname, email, role, password, image) ";
  $query .= "VALUES ('$firstname', '$lastname', '$email', '$role', '$password', '$image_file_name')";

  $succeded = execute($query);

  session_unset();
  
  if ($succeded) {    
    set_alert_message('success', 'user registred successfully');
  } else {
    set_alert_message('danger', 'something went wrong');
  }
}

redirect('/admin/users/new');
