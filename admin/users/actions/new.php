<?php include '../../../functions/redirect.php' ?>
<?php include '../validators/validate_empty_inputs.php' ?>
<?php include '../validators/validate_password.php' ?>
<?php include '../validators/validate_email.php' ?>

<?php
validate_empty_inputs();
validate_password();
validate_email();

echo $firstname = $_POST['firstname'] . '<br>';
echo $lastname = $_POST['lastname'] . '<br>';
echo $email = $_POST['email'] . '<br>';
echo $password = $_POST['password'] . '<br>';
echo $role = $_POST['role'] . '<br>';

// echo $image = $_FILES['image'] . '<br>';
// echo $image_file_name = $image['name'] . '<br>';
// echo $image_tmp_name = $image['tmp_name'] . '<br>';
//insert a default image.


redirect('/admin/users/'); // WITH SUCCESS MESSAGE
