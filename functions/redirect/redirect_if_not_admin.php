<?php include_once 'redirect.php' ?>
<?php include_once '../login/functions/is_logged_in.php' ?>
<?php include_once '../login/functions/is_admin.php' ?>

<?php 
  if (!is_logged_in()) {
  redirect('/login');
} else if (!is_admin()) {
  redirect('/');
}
