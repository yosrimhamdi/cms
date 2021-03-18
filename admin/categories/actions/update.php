<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/redirect.php' ?>

<?php
$category_id = $_POST['id'];
$category_title = $_POST['title'];

$query  = 'UPDATE categories ';
$query .= "SET title = '$category_title' ";
$query .= "WHERE id = $category_id";

execute($query);

redirect('/admin/categories');
