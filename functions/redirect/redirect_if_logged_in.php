<?php include_once '../functions/redirect/redirect.php' ?>

<?php
function redirect_if_logged_in() {
   if(isset($_SESSION['role'])) {
    redirect('/');
  }
}