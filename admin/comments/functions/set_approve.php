<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/redirect/redirect.php' ?>

<?php

function set_approve($approve_status) {
  $id = $_GET['id'];

  echo $approve_status;

  $query  = "UPDATE comments ";
  $query .= "SET approved = $approve_status ";
  $query .= "WHERE id = $id";

  echo $query;

  execute($query);

  redirect('/admin/comments');
}
?>