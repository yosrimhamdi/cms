<?php include_once '../../functions/redirect/redirect.php' ?>
<?php include_once '../../functions/redirect/redirect_if_not_legal.php' ?>

<?php
session_start();

unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['role']);

redirect('/login');