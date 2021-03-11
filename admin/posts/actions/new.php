<?php include '../../../functions/redirect.php' ?>
<?php include '../../../db/execute.php' ?>

<?php
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
echo $image = $_FILE['image'];

$query  = "INSERT INTO posts(category_id, title, keywords, description, approved) ";
$query .= "VALUES($category_id, '$title', '$keywords', '$description', true)";


// execute($query);

// redirect('/admin/posts');
