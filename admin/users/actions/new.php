<?php include '../../../functions/redirect.php' ?>
<?php include '../functions/save_or_gen_err.php' ?>
<?php include '../validators/is_not_empty.php' ?>
<?php include '../validators/is_email.php' ?>
<?php include '../validators/is_valid_password.php' ?>

<?php session_start();

save_or_gen_err('firstname', 'is_not_empty', 'empty firstname not allowed');
save_or_gen_err('lastname', 'is_not_empty', 'empty firstname not allowed');
save_or_gen_err('email', 'is_email', 'invalid email');
save_or_gen_err('password', 'is_valid_password', 'password must be 8+ chars');



// echo $firstname = $_POST['firstname'] . '<br>';
// echo $lastname = $_POST['lastname'] . '<br>';
// echo $email = $_POST['email'] . '<br>';
// echo $password = $_POST['password'] . '<br>';
// echo $role = $_POST['role'] . '<br>';

// echo $image = $_FILES['image'] . '<br>';
// echo $image_file_name = $image['name'] . '<br>';
// echo $image_tmp_name = $image['tmp_name'] . '<br>';
//insert a default image.


redirect('/admin/users/new');
