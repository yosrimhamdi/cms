<?php include '../../../functions/redirect.php' ?>
<?php include '../../../db/execute.php' ?>

<?php
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$image = $_FILES['image'];
echo $image_file_name = $image['name'];
$image_tmp_file = $image['tmp_name'];

$query  = "INSERT INTO posts(category_id, title, keywords, description, image, approved) ";
$query .= "VALUES($category_id, '$title', '$keywords', '$description', '$image_file_name', true)";

execute($query);

move_uploaded_file($image_tmp_file, "../../../static/images/$image_file_name");

redirect('/admin/posts');
