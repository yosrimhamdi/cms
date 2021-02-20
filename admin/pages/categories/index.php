<?php include '../../layouts/top_bun.php'; ?>
<div class="col-lg-12">
  <div class="col-xs-6">
    <form action="./actions/create.php" method="post">
      <div class="form-group">
        <label>Add category:</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
      </div>
    </form>
  </div>
  <?php include 'components/category_table.php'; ?>
</div>
<?php include '../../layouts/bottom_bun.php'; ?>