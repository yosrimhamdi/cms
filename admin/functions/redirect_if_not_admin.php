<?php session_start(); ?>
<?php include_once '../functions/redirect.php' ?>

<?php 
function redirect_if_not_admin() {
  if (!(isset($_SESSION['role']) && $_SESSION['role'] === 'admin')) {
    redirect('/');
  }
}