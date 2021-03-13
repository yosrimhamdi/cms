<?php include '../../../functions/redirect.php' ?>

<?php
function send_error($message) {
  redirect("/admin/users/new?message=$message");
}
