<?php include_once '../../../db/execute.php'; ?>
<?php include_once '../../../functions/redirect/redirect.php'; ?>

<?php

$id = $_GET['id'];

$query = "DELETE FROM posts WHERE id = $id";

execute($query);

redirect('/admin/posts');
?>