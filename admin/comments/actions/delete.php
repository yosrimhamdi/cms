<?php include '../../../db/execute.php' ?>
<?php include '../../../functions/redirect.php' ?>

<?php
$id = $_GET['id'];

$query  = "DELETE FROM comments ";
$query .= "WHERE id = $id";

execute($query);

redirect('/admin/comments');
?>