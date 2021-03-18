<?php include_once '../../functions/redirect.php' ?>

<?php
session_start();

unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['role']);

redirect('/login');