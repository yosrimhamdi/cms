<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/redirect.php' ?>

<?php
$category_title = $_POST['title'];

$query  = 'INSERT INTO categories(title) ';
$query .= "VALUES('$category_title')";

execute($query);

redirect('/admin/categories');
