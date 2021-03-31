<?php include_once 'redirect.php' ?>
<?php include_once '../login/functions/is_logged_in.php' ?>
<?php include_once '../login/functions/is_admin.php' ?>

<?php 
function redirect_if_not_admin() {
   if (!is_logged_in()) {
    redirect('/login');
  }else if (is_logged_in() && !is_admin()) {
    redirect('/');
  }
}