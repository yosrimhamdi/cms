<?php include '../../../db/execute.php' ?>

<?php include '../../layouts/top_bun.php' ?>
<div class="col-xs-6">
  <form action="/admin/posts/actions/new.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="keywords">keywords</label>
      <input type="text" class="form-control" name="keywords">
    </div>
    <div class="form-group">
      <label for="description">description</label>
      <textarea class="form-control " name="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="category">category</label>
      <select name="category_id">
        <?php
        $query = "SELECT * FROM categories";

        $categories = execute($query);

        while ($catogory = mysqli_fetch_assoc($categories)) {
          echo "<option value='$catogory[id]'>$catogory[title]</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="image">image</label>
      <input type="file" name="image" accept="image/*">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>
  </form>
</div>
<?php include '../../layouts/bottom_bun.php' ?>