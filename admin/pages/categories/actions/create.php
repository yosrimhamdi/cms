<?php include '../../../../db/execute.php' ?>
<?php include '../functions/redirect.php' ?>

<?php
$category_title = $_POST['title'];

$query  = 'INSERT INTO categories(title) ';
$query .= "VALUES('$category_title')";

$succeeded = execute($query);

redirect('/admin/pages/categories');
