<?php include '../../../../db/execute.php' ?>

<?php
$category_title = $_POST['title'];

$query  = 'INSERT INTO categories(title) ';
$query .= "VALUES('$category_title')";

execute($query);

header('Location: /admin/pages/categories');
