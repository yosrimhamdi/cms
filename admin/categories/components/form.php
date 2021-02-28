<?php
$url =  $_SERVER['REQUEST_URI'];

$action = 'create';
$button_text = 'Add category';

$category_id = '';
$category_tite = '';

if (str_contains($url, 'update')) {
  $action = 'update';
  $button_text = 'Update category';

  $category_id = $_GET['update_id'];
  $category_tite = $_GET['category_title'];
}
?>

<form action="/admin/categories/actions/<?php echo $action ?>.php" method="post">
  <div class="form-group">
    <label><?php echo $button_text ?></label>
    <input type="text" class="form-control" name="title" value="<?php echo $category_tite ?>" autofocus>
    <input type="text" name="id" value="<?php echo $category_id ?>" hidden>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $button_text ?>">
  </div>
</form>