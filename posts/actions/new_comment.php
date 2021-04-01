<?php include_once '../../db/execute.php' ?>
<?php include_once '../../functions/redirect/redirect.php' ?>

<?php
echo $post_id = $_POST['post_id'];
echo $comment = $_POST['comment'];

$query  = "INSERT INTO comments(post_id, content) ";
$query .= "VALUES($post_id, '$comment')";

execute($query);

redirect("/posts/view/$post_id");
