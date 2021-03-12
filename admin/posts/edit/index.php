<?php include '../../../functions/get_param.php'; ?>
<?php include '../functions/display_categories.php' ?>

<?php
$id = get_param();

$query = 'SELECT * FROM posts ';
$query .= "WHERE id = $id";

$post = execute($query);
$post = mysqli_fetch_assoc($post);
?>

<?php include '../../layouts/top_bun.php'; ?>
<div class="col-xs-6">
  <form action="/admin/posts/actions/edit.php" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    <input type="hidden" value="<?php echo $post['image'] ?>" name="prev_image_name">
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
      <textarea class="form-control " name="description" cols="30" rows="10"><?php echo $post['description']; ?></textarea>
    </div>
    <div class=" form-group">
      <label for="category">category</label>
      <select name="category_id">
        <?php display_categories() ?>
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