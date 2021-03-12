<?php include '../../../functions/get_param.php'; ?>
<?php include '../../../db/execute.php'; ?>

<?php
$id = get_param();

$query = 'SELECT * FROM posts ';
$query .= "WHERE id = $id";

$post = execute($query);
$post = mysqli_fetch_assoc($post);
?>

<?php include '../../layouts/top_bun.php'; ?>
<div class="col-xs-6">
  <form action="/admin/posts/actions/update.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
      <label for="keywords">keywords</label>
      <input type="text" class="form-control" name="keywords" value="<?php echo $post['keywords']; ?>">
    </div>
    <div class=" form-group">
      <label for="description">description</label>
      <textarea class="form-control " name="description" cols="30"
        rows="10"><?php echo $post['description']; ?></textarea>
    </div>
    <div class=" form-group">
      <label for="category">category</label>
      <select name="category_id">
        <?php
        $query = 'SELECT * FROM categories';
        $categories = execute($query);
        while ($category = mysqli_fetch_assoc($categories)) {
          if ($post['category_id'] === $category['id']) {
            echo "<option value='$category[id]' selected>$category[title]</option>";
          } else {
            echo "<option value='$category[id]'>$category[title]</option>";
          }
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="image">image</label>
      <input type="file" name="image" accept="image/*" value="<?php echo $post['image']; ?>">
    </div>
    <div class=" form-group">
      <input class="btn btn-primary" type="submit" value="Edit Post">
    </div>
  </form>
</div>

<?php include '../../layouts/bottom_bun.php'; ?>