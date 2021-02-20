<?php include_once '../../../db/execute.php'; ?>
<?php if (isset($_GET['category_id'])) {
  $id = $_GET['category_id'];

  $query = 'DELETE FROM categories ';
  $query .= "WHERE id = $id";

  execute($query);

  $message = 'deleted.';
}
?>
