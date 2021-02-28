<?php include '../../layouts/top_bun.php' ?>

<div class="col-xs-6">
  <form 
    action="/admin/posts/actions/new.php"
    method="post"
    enctype="multipart/form-data"
  >
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="post_tags">keywords</label>
      <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
      <label for="post_content">description</label>
      <textarea class="form-control " name="post_content" cols="30" rows="10">
      </textarea>
    </div>
        <div class="form-group">
      <label for="category">category</label>
      <select name="post_category">
      </select>
    </div>
    <div class="form-group">
      <label for="post_image">image</label>
      <input type="file" name="image" accept="image/*">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>
  </form>
</div>

<?php include '../../layouts/bottom_bun.php' ?>