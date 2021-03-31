<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/alert/set_alert.php' ?>
<?php include_once '../../../functions/redirect/redirect.php' ?>

<?php session_start();

$id = $_GET['id'];

$query  = "DELETE FROM users ";
$query .= "WHERE id = $id";

$succeded = execute($query);

if ($succeded) {
  set_alert('success', 'user deleted');
} else {
  set_alert('danger', 'could not delete user');
}


redirect('/admin/users/');