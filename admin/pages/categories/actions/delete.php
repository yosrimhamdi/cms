<?php include '../../../../db/execute.php' ?>

<?php
$id = $_GET['id'];

$query = 'DELETE FROM categories ';
$query .= "WHERE id = $id";

execute($query);

header('Location: /admin/pages/categories');
