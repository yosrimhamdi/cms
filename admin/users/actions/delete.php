<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/set_alert_message.php' ?>
<?php include_once '../../../functions/redirect.php' ?>

<?php session_start();

$id = $_GET['id'];

$query  = "DELETE FROM users ";
$query .= "WHERE id = $id";

$succeded = execute($query);

if ($succeded) {
  set_alert_message('success', 'user deleted');
} else {
  set_alert_message('danger', 'could not delete user');
}


redirect('/admin/users/');