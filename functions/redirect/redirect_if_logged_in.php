<?php include_once '../functions/redirect/redirect.php' ?>
<?php include_once '../login/functions/is_logged_in.php' ?>
<?php include_once '../login/functions/is_admin.php' ?>

<?php
function redirect_if_logged_in() {
   if(is_logged_in() && is_admin()) {
    redirect('/admin');
  } else if (is_logged_in() && !is_admin()) {
    redirect('/');
  }
}