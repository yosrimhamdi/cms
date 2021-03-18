<?php include_once '../../../db/execute.php' ?>
<?php include_once '../../../functions/redirect.php' ?>

<?php
$id = $_POST['id'];
$title = $_POST['title'];
$keywords = $_POST['title'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = $_FILES['image'];
$image_file_name = $image['name'];
$image_tmp_name = $image['tmp_name'];
$image_found = !$image['error'];
$prev_image_name = $_POST['prev_image_name'];

$root =  $_SERVER['DOCUMENT_ROOT'];

$query  = "UPDATE posts ";
$query .= "SET title = '$title', ";
$query .= "    keywords = '$keywords', ";
$query .= "    description = '$description', ";
if ($image_found) {
  $query .= "    image = '$image_file_name', ";
}
$query .= "    category_id = $category_id ";
$query .= "WHERE id = $id";

execute($query);

if ($image_found) {
  unlink($root . "/static/images/$prev_image_name");

  move_uploaded_file($image_tmp_name, $root . "/static/images/$image_file_name");
}

redirect('/admin/posts');
?>