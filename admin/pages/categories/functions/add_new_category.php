<?php include '../../../db/execute.php' ?>
<?php
if (isset($_POST['submit'])) {
  $category_title = $_POST['title'];

  if (empty($category_title)) {
    $message = 'empty field.';
  } else {
    $query  = 'INSERT INTO categories(title) ';
    $query .= "VALUES('$category_title')";

    $succeeded = execute($query);

    if ($succeeded) {
      $message = 'added.';
    } else {
      $message = 'something went wrong.';
    }
  }
}
