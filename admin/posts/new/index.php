<?php include_once '../functions/display_categories.php' ?>

<?php include_once '../../layouts/top_bun.php' ?>
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
      <textarea class="form-control " id="editor" name="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="category">category</label>
      <select name="category_id">
        <?php display_categories() ?>
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
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
  .create( document.querySelector( '#editor' ) )
  .then( editor => {
      console.log( editor );
  } )
  .catch( error => {
      console.error( error );
  } );
</script>
<?php include_once '../../layouts/bottom_bun.php' ?>