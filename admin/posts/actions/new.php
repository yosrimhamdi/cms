<?php include_once '../../../functions/redirect/redirect.php' ?>
<?php include_once '../../../db/execute.php' ?>

<?php
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$image = $_FILES['image'];
$image_file_name = $image['name'];
$image_tmp_file = $image['tmp_name'];

$root = $_SERVER['DOCUMENT_ROOT'];

$query  = "INSERT INTO posts(category_id, title, keywords, description, image, approved) ";
$query .= "VALUES($category_id, '$title', '$keywords', '$description', '$image_file_name', true)";

execute($query);

move_uploaded_file($image_tmp_file, $root . "/static/images/$image_file_name");

redirect('/admin/posts');
