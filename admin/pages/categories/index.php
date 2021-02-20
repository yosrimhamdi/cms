<?php include 'functions/add_new_category.php'; ?>
<?php include 'functions/delete_category.php'; ?>

<?php include '../../layouts/top_bun.php'; ?>
<div class="col-lg-12">
  <div class="col-xs-6">
    <form method="post">
      <div class="form-group">
        <label>Add category:</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
      </div>
    </form>
    <?php include 'components/alert_message.php'; ?>
  </div>
  <?php include 'components/category_table.php'; ?>
  <script src="../javascript/remove_alert.js"></script>
</div>
<?php include '../../layouts/bottom_bun.php'; ?>
