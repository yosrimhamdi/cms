<?php include '../../../db/execute.php'; ?>
<?php include '../../../functions/redirect.php'; ?>

<?php

$id = $_GET['id'];

$query = "DELETE FROM posts WHERE id = $id";

execute($query);

redirect('/admin/posts');
?>