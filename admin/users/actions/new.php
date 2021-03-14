<?php include '../../../functions/redirect.php' ?>
<?php include '../functions/save_or_gen_err.php' ?>
<?php include '../validators/is_not_empty.php' ?>
<?php include '../validators/is_email.php' ?>
<?php include '../validators/is_valid_password.php' ?>

<?php session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$v1 = save_or_gen_err('firstname', $firstname, 'is_not_empty', 'empty firstname not allowed');
$v2 = save_or_gen_err('lastname', $lastname, 'is_not_empty', 'empty firstname not allowed');
$v3 = save_or_gen_err('email', $email, 'is_email', 'invalid email');
$v4 = save_or_gen_err('password', $password, 'is_valid_password', 'password must be 8+ chars');

if ($v1 && $v2 && $v3 && $v4) {
// echo $image = $_FILES['image'] . '<br>';
// echo $image_file_name = $image['name'] . '<br>';
// echo $image_tmp_name = $image['tmp_name'] . '<br>';
//insert a default image.

}

redirect('/admin/users/new');
