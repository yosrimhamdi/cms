<?php include "print_categories.php" ?>
<?php
$categories  = execute('SELECT title FROM categories');

$num_rows = mysqli_num_rows($categories);
?>

<div class="well">
  <h4>Post Categories</h4>
  <div class="row">
    <div class="col-lg-6">
      <ul class="list-unstyled">
        <?php
        $offset = is_float($num_rows / 2) ? 1 : 0;

        print_categories($offset);
        ?>
      </ul>
    </div>
    <div class="col-lg-6">
      <ul class="list-unstyled">
        <?php print_categories(); ?>
      </ul>
    </div>
  </div>
</div>