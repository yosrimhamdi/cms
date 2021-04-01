<?php include_once 'redirect.php' ?>

<?php 
function redirect_if_not_legal($path) {
  if(!isset($_POST['submit'])) {
    redirect($path);
  }
}