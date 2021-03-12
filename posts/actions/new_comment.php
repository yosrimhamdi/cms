<?php include '../../db/execute.php' ?>
<?php include '../../functions/redirect.php' ?>

<?php
echo $post_id = $_POST['post_id'];
echo $comment = $_POST['comment'];

$query  = "INSERT INTO comments(post_id, content) ";
$query .= "VALUES($post_id, LOWER('$comment'))";

execute($query);


redirect("/posts/view/$post_id");
