<?php include '../../../functions/redirect.php' ?>
<?php include '../../../functions/session_close.php' ?>
<?php include '../../../db/execute.php' ?>
<?php include '../functions/save_or_gen_err.php' ?>
<?php include '../validators/is_not_empty.php' ?>
<?php include '../validators/is_email.php' ?>
<?php include '../validators/is_valid_password.php' ?>

<?php session_start();
// MUST BE IN AN ENV VAR
$salt = '$6$rounds=5000$thisisarandomstringoverheresodamnsecured$';
$root = $_SERVER['DOCUMENT_ROOT'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$role = $_POST['role'];
$password = $_POST['password'];
$image = $_FILES['image'];

$v1 = save_or_gen_err('firstname', $firstname, 'is_not_empty', 'empty firstname not allowed');
$v2 = save_or_gen_err('lastname', $lastname, 'is_not_empty', 'empty firstname not allowed');
$v3 = save_or_gen_err('email', $email, 'is_email', 'invalid email');
$v4 = save_or_gen_err('password', $password, 'is_valid_password', 'password must be 8+ chars');

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

  execute($query);

  session_close();
}

redirect('/admin/users/new');
