<?php include '../../../db/execute.php' ?>
<?php include '../../../functions/redirect.php' ?>

<?php
$id = $_GET['id'];

$query = 'DELETE FROM categories ';
$query .= "WHERE id = $id";

execute($query);

redirect('/admin/categories');
